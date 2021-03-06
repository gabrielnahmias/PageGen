<?php
require_once "config.php";

require_once DIR_SMARTY."/Smarty.class.php";

require_once DIR_CLS."/Browser/Browser.php";
require_once DIR_CLS."/Utils.php";
require_once DIR_CLS."/Web.php";

$smarty = new Smarty();
$br = new Browser();

$smarty->setTemplateDir(DIR_ASSETS."/tpl");

// Normalize some commonly referred-to values.
$browser = $br->getBrowserArray();

// Two handy variables (a single variable for some and an array element inside the browser array
// for the organized).
$iPhone = $browser['iOS'] = ( substr($br->getPlatform(), 0, 2) == "iP" ) ? true : false;

// Possible future overrides:
//$browser['classString'] = $br->getClassString("", true, true, true, true);

/* // Enable this bit when you have your database set up.
//$db = @new mysqli(DB_HOST, DB_USER, DB_PW, DB_NAME);

// Check connection
if ($db->connect_errno) {
    printf("<strong>Database connection failed:</strong> %s\n", $db->connect_error);
    exit();
}*/
