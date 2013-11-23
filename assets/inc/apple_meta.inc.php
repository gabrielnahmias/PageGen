<?php require_once "config.php";	// Or create a DIR_BASE constant.

if ($browser["mobile"]):
?>

<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<!-- Disable this next bit if you don't want adding this to the homescreen to result
     in a native web application shortcut. -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!-- Uncomment the following line to turn off telephone number formatting (click to call)
<meta name="format-detection" content="telephone=no"> -->

<!-- iPhone Icon -->
<link href="<?=DIR_APPLE_ICONS?>/apple-touch-icon-57x57.png" sizes="57x57" rel="apple-touch-icon-precomposed">
<!-- iPhone (Retina) Icon -->
<link href="<?=DIR_APPLE_ICONS?>/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<!-- iPad Icon -->
<link href="<?=DIR_APPLE_ICONS?>/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<!-- iPad (Retina) Icon -->
<link href="<?=DIR_APPLE_ICONS?>/apple-touch-icon-144x144.png" sizes="144x144" rel="apple-touch-icon">

<!-- iPhone Splashscreen -->
<link href="<?=DIR_APPLE_SPLASH?>/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
<!-- iPhone (Retina) Splashscreen -->
<link href="<?=DIR_APPLE_SPLASH?>/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPad (portrait) Splashscreen -->
<link href="<?=DIR_APPLE_SPLASH?>/apple-touch-startup-image-768x1004.png" sizes="768x1004" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
<!-- iPad (landscape) Splashscreen -->
<link href="<?=DIR_APPLE_SPLASH?>/apple-touch-startup-image-1024x748.png" sizes="1024x748" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
<!-- iPad (Retina, portrait) Splashscreen -->
<link href="<?=DIR_APPLE_SPLASH?>/apple-touch-startup-image-1536x2008.png" sizes="1536x2008" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPad (Retina, landscape) Splashscreen -->
<link href="<?=DIR_APPLE_SPLASH?>/apple-touch-startup-image-2048x1496.png" sizes="2048x1496" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">

<?php
endif;
?>