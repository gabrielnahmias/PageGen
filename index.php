<?php
require_once "common.php";

// Do all data collection here.
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include DIR_INC."/og_meta.inc.php" ?>
<?php include DIR_INC."/apple_meta.inc.php" ?>
<title><?=($browser['iOS']) ? NAME : TITLE // This makes for a better appearance when adding to an iPhone's homescreen, etc. (shorter title). ?></title>
<link rel="shortcut icon" href="<?=DIR_IMG?>/favicon.ico">
<!-- normalize.css -->
<link rel="stylesheet" href="<?=DIR_CSS?>/normalize.min.css" type="text/css">
<!-- Console.js -->
<script src="<?=DIR_CON?>/Console.js" type="text/javascript"></script>
<!-- jQuery -->
<script src="<?=DIR_JS?>/jquery-<?=VER_JQ?>.min.js" type="text/javascript"></script>
<!-- jQuery Center Plugin 
<script src="<?php echo DIR_JS; ?>/jquery.center.min.js" type="text/javascript"></script> -->
<!-- jQuery UI -->
<link href="<?=DIR_JQUI?>/css/redmond/jquery-ui-<?=VER_JQUI?>.min.css" rel="stylesheet" type="text/css">
<script src="<?=DIR_JQUI?>/jquery-ui-<?=VER_JQUI?>.min.js" type="text/javascript"></script>
<!-- jQuery-shorty (my shortcut plugin) 
<script src="<?=DIR_JS?>/shorty/jquery.shorty.min.js" type="text/javascript"></script> -->
<!-- jQuery-inputevent 
<script src="<?=DIR_JS?>/jquery.inputevent.min.js" type="text/javascript"></script> -->
<!-- Proprietary -->
<link rel="stylesheet" href="<?=DIR_CSS?>/styles.css" type="text/css">
<!-- This next included script file allows all PHP constants and variables to be stored
     in a namespace. -->
<script src="<?=DIR_JS?>/json.js" type="text/javascript"></script>
<!-- This next included script file should be the place for main JavaScript execution code. -->
<script src="<?=DIR_JS?>/scripts.js" type="text/javascript"></script>
<script type="text/javascript">
// Any code you want to run.
</script>
</head>
<body<?=$browser['classString']?>>
	<div id="wrapper">
    	<section id="content">
    		<div id="map"></div>
        </section>
    </div>
</body>
</html>