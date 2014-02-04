<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<!--[if IE 7]><html class="lt-ie9 lt-ie8" lang="ru" data-framework="canjs"> <![endif]-->
<!--[if IE 8]><html class="lt-ie9" lang="ru" data-framework="canjs"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="{lang}" data-framework="canjs">
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
      
        <!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
        
        <!--[if lt IE 9]>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="{res_js}/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="{res_js}/vendor/jquery-2.0.3.min.js"><\/script>')</script>
        <!--<![endif]-->
        
        <?php //Custom scripts, added by add_script() function. Do not touch! ?>
            {scripts}{script}{/scripts}
        <?php //Custom scripts ?>
    </body>
</html>