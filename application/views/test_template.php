<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="{lang}">
<head>
  <meta charset="utf-8">
  <title>{site_title}</title>
  <link rel="shortcut icon" href="{res_url}/favicon.ico" type="image/x-icon">
  <?php //Custom stylesheets, added by add_css() function. Do not touch! ?>
      {styles}{style}{/styles}
  <?php //Custom styles ?>
</head>  
    <body>
      
      {site_body}
    
        <?php //Custom scripts, added by add_script() function. Do not touch! ?>
            {scripts}{script}{/scripts}
        <?php //Custom scripts ?>
    </body>
</html>