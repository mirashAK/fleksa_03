<form name="{form:name}" id="{form:name}" action="{form:action}" method="POST" >
<label for="{caption:user_email}">Email: </label><input name="{name:user_email}" type="{HTML_type:user_email}" id="{caption:user_email}" value="{value:user_email}" /><br/>
<div data-error_name="{name:user_email}" style="color:red;"></div>
<label for="{caption:user_pass}">Password: </label><input name="{name:user_pass}" type="{HTML_type:user_pass}" id="{caption:user_pass}" value="{value:user_pass}" /><br/>
<div data-error_name="{name:user_pass}" style="color:red;"></div>
<label for="{caption:user_re_pass}">Password: </label><input name="{name:user_re_pass}" type="{HTML_type:user_re_pass}" id="{caption:user_re_pass}" value="{value:user_re_pass}" /><br/>
<div data-error_name="{name:user_re_pass}" style="color:red;"></div>
<div data-error_name="{name:reg_error}" style="color:green;"></div>
<input class="btn-primary" type="submit" value="Registration"/>
</form>