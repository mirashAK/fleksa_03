define(['../core/forms_handler'], function(Forms_handler)
{
    Forms_handler.new_form(
    {
      form_name: 'auth_form',
      reload_container: '#auth_form_reload_container'  
    });
    
    Forms_handler.new_form(
    {
      form_name: 'reg_form',
      reload_container: '#reload_container',
      on_key_press: function (event) { jQuery(event.target).removeClass('error'); },
      on_error: function (elem, errors) {elem.addClass('error').after('<span>'+errors+'</span>'); },
      before_send: function (form) { form.find('.btn-primary').addClass('is-wait'); }        
    });
    
    Forms_handler.new_form(
    {
      form_name: 'static_page',
      on_error: function (elem, errors) {elem.addClass('error').after('<span>'+errors+'</span>'); },
    });
}); 


