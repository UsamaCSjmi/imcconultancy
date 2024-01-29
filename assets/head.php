<?php //require_once('./assets/config.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex , nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      <?php
        if(isset($title[$current_page])) 
          echo $title[$current_page];
        else
          echo "Page Not Found! ERROR 404.";
      ?>
    </title>
    <meta name="description" content="
    <?php
    
      if(isset($description[$current_page])) 
        echo $description[$current_page];
      else
        echo "Page Not Found! ERROR 404.";
    ?>"/>
    <link rel="manifest" href="<?php echo SITE_PATH;?>/assets/favicon/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#faaf02">
    <meta name="theme-color" content="#2f2484">
    <link rel="mask-icon" href="<?php echo SITE_PATH;?>/assets/favicon/safari-pinned-tab.svg" color="#faaf02">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo SITE_PATH;?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_PATH;?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_PATH;?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo SITE_PATH;?>/assets/favicon/site.webmanifest">
    <!-- -------------Bootstrap------------------- -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
 
    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="magnific-popup/jquery.magnific-popup.js"></script>


    <!-- --------Stylesheets------------- -->
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/style.css?v=<?php echo time()?>" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/Main.css?v=<?php echo time()?>" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/Responsive.css?v=<?php echo time()?>" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/About.css?v=<?php echo time()?>" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/About_responsive.css?v=<?php echo time()?>" />

    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/Header.css" />
    <link rel="stylesheet" href="<?php echo SITE_PATH;?>/css/Footer.css" />
  </head>
  <body>
