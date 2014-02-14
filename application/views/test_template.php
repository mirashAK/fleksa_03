<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="ru"> <![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="ru"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{lang}">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <title>{site_title}</title>
  <link rel="shortcut icon" href="{res_url}/favicon.ico" type="image/x-icon" />
  
   <!-- $helpers -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <!-- /helpers -->
  
  <?php //Custom stylesheets, added by add_css() function. Do not touch! ?>
      {styles}{style}{/styles}
  <?php //Custom styles ?>
  
  <!--[if lt IE 9]>
      <script src="{res_js}/vendor/html5shiv.js"></script>
  <![endif]-->
  
</head>  
    <body>
      
      {site_body}
      
        <script type="text/javascript">var BASEURL = '{base_url}', RESURL = '{res_url}', RESJSURL = '{res_js}', LANG = '{lang}';</script><!--
        --><!--[if lt IE 9]>
            <script type="text/javascript">var JQUERY_CDN = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min", JQUERY_LOC = "vendor/jquery-1.10.2.min"</script>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <script type="text/javascript">var JQUERY_CDN = "http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min", JQUERY_LOC = "vendor/jquery-2.0.3.min"</script>
        <!--<![endif]-->
        <?php //Custom scripts, added by add_script() function. Do not touch! ?>
            {scripts}{script}{/scripts}
        <?php //Custom scripts ?>
    </body>
</html>