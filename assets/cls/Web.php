<?php

require_once "common.php";

class Web {
	public static function debug($val, $title = "Data", $visible = true) {
		if (CONFIG_DEBUG):
			if ($visible) {
				echo "<pre class=\"debug\"><div><strong class=\"title\">$title</strong>";	// Try to implement Utils.getVarName() here!
				print_r($val);
				echo '</div></pre>';
			} else
				echo "<!--\r\n$title:\r\n".print_r($val, true)."\r\n-->";
		endif;
	}
	public function filter($var, $option = FILTER_SANITIZE_STRING) {
		return filter_var($var, $option);
	}
}