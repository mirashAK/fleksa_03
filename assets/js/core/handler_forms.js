jQuery(document).ready(function()
{
    Flx = {};
  
    // Определение отправщика формы
    Flx.Forms_sender = function(form_data)
    {
      var form = $('form[name="'+form_data.form_name+'"]');
      form.find('[type="submit"]').each(function() {$(this).removeAttr("disabled");});

      // Служебка для проверки результата работы $ find(), чтобы знать, когда элемент не найден
      var check_result = function (result)
      {
        if (result.length === 0) return false;
        else return result;
      };

      form.on('submit', function (e)
      {
        e.preventDefault();

        // Формируем данные для отправки, чтобы они передавались как единственный параметр
        var data = {};
        data[form.attr('name')] = function ()
        {
            var a = [];
            form.find
            (
              "input[type='checkbox']:checked, "+
              "input[type='file'], "+
              "input[type='hidden'], "+
              "input[type='password'], "+
              "input[type='radio']:checked, "+
              "input[type='text'],"+
              "textarea, select"
            ).
            each(function()
            {
                if(this.tagName == 'SELECT' && $(this).attr('multiple') == true) 
                {
                    var select_name = this.name;
                    $(this).find('option:selected').each(function() { a.push(select_name+'[]=' + this.value); })
                } 
                else 
                {
                    var content = $(this).hasClass('tiny-mce') ? tinyMCE.get($(this).attr('id')).getContent() : this.value;
                    a.push(this.name + '=' + encodeURIComponent(content));
                }
            });
            return a.join('&');
        }

        // Адрес action формируется в контроллере при создании формы и выводится во view шаблона формы
        var url = form.attr('action');

        // Контейнер используем для замены его содержимого кодом HTML, сформированным после обработки формы
        var reload_container = form_data.reload_container || '.'+form.attr('name')+'_reload_container';
        reload_container = check_result(jQuery(reload_container).first()) || false;

        var before_send = form_data.before_send || function(){};
        var after_send = form_data.after_send || function(){};
        var success_send = form_data.success_send || function(){};

        // Ajax sending
        $.ajax (
        {
          url: url,
          type: 'post',
          dataType: 'json',
          data: data,
          beforeSend: function ( xhr ) { form.find('[type="submit"]').each(function() {$(this).attr("disabled", "disabled");}); before_send (form, xhr); },
          success: function(answer)
          {
            //console.log(answer);
            if (answer.valid === true)
            {
              // Меняем значения полей, например при добавлении новой записи
              if (answer.update !== false)
                jQuery.each(answer.update, function (name, value) { form.find('[name="'+name+'"]').val(value); });
              // Сервер в ответе выдаёт либо адрес редиректа
              if (answer.redirect !== false)
              {
                //console.log(answer.redirect);
                // Фикс глюка WebKit браузеров, когда они не сохраняют значения полей для autocomplete
                if (navigator.detect_WebKit())
                {
                  form.find('[type="submit"]').each(function() {$(this).removeAttr("disabled")});
                  form.off('submit');
                  form.attr('action', answer.redirect);
                  form.find('[type="submit"]').click();
                }
                else window.location = answer.redirect;
              }
              //  либо код HTML, который нужно поместить на место формы (в reload_container)
              else if (answer.view !== false && reload_container) {
                reload_container.html(answer.view);
              }
              success_send(form, answer);
            }
            else
            {
              for ( var name in answer.errors )
              {
                // Имена элементов массива с ошибками соответствуют name поля
                var elem = check_result(form.find('[name="'+name+'"]'));
                if (elem && form_data.on_error)
                {
                  form_data.on_error(elem, answer.errors[name]);
                  elem.on('keypress', form_data.on_key_press);
                }
              }
            }
          },
          error: function (jqXHR, textStatus, errorThrown) { console.log(textStatus + ': ' + errorThrown); }
        }).always(function() {form.find('[type="submit"]').each(function() {$(this).removeAttr("disabled");}); after_send (form); });
      });
    };
    
    navigator.detect_WebKit = (function()
    {
      var ua= navigator.userAgent;
      return /(opera|chrome|safari(?=\/))\/?\s*([\d\.]+)/i.test(ua);
    });

}); 


