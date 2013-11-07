<?php

require_once "common.php";

class Utils {
	public static function var_name (&$iVar, &$aDefinedVars) {
		if ($aDefinedVars == NULL)
			$aDefinedVars = get_defined_vars();
		foreach ($aDefinedVars as $k=>$v)
			$aDefinedVars_0[$k] = $v;
		$iVarSave = $iVar;
		$iVar = !$iVar;
		$aDiffKeys = array_keys (array_diff_assoc ($aDefinedVars_0, $aDefinedVars));
		$iVar = $iVarSave;
		return $aDiffKeys[0];
	}	
}