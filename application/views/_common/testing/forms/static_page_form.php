<form name="{form:name}" id="{form:name}" action="{form:action}" method="POST" >
<label>{caption:static_page_id}: {value:static_page_id}</label><br/>
<label for="{caption:static_page_alias}">{caption:static_page_alias}: </label>
<input name="{name:static_page_alias}" type="{HTML_type:static_page_alias}" id="{caption:static_page_alias}" value="{value:static_page_alias}"  {r_only:static_page_alias}/><br/>
<label for="{caption:static_page_text}">{caption:static_page_text}: </label>
<textarea name="{name:static_page_text}" id="{caption:static_page_text}" {r_only:static_page_alias}/>{value:static_page_text}</textarea><br/>
<input class="btn-primary" type="submit" value="Registration"/>
</form>