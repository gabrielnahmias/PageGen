<?php
require_once "../../config.php";

// This simply outputs some JSON so that all the pages can have JavaScript
// equivelants of all of the declared PHP constants & variables.  The output file
// gets read in by a function called by our main script and parsed appropriately.
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Thurs, 1 Jan 1970 00:00:00 GMT');
header('Content-type: application/json');

// Get all the user-defined constants.
$aConstants = get_defined_constants(true);
$aConstants = array( "const" => $aConstants['user'] );

// You will probably only need a few variables.
$aVars = array( "vars" => array(/* Specify any variables you want to access via JS here. */) );

// Merge all this together.
$aData = array_merge($aConstants, $aVars);

// Output.
print json_encode($aData);
?>