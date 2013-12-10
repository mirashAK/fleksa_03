jQuery(document).ready(function()
{
    Flx.Forms_sender(
    {
      form_name: 'auth_form'
    });
    
    Flx.Forms_sender(
    {
      form_name: 'reg_form',
      reload_container: '#reload_container',
      on_key_press: function (event) { jQuery(event.target).removeClass('error'); },
      on_error: function (elem, errors) {elem.addClass('error').after('<span>'+errors+'</span>'); },
      before_send: function (form) { form.find('.btn-primary').addClass('is-wait'); }        
    });
    
    Flx.Forms_sender(
    {
      form_name: 'static_page',
      on_error: function (elem, errors) {elem.addClass('error').after('<span>'+errors+'</span>'); },
    });
}); 


