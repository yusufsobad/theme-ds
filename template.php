<?php

(!defined('THEMEPATH')) ? exit : '';

if (is_dir(THEMEPATH . '/sasi')) {
	$dir = THEMEPATH . '/sasi/';
	if (file_exists($dir . 'template.php')) {
		require $dir . 'template.php';

		if (!class_exists('sasi_template')) {
			$alert = _error::_alert_db("class :: sasi_template not found!!!");
			die($alert);
		}
	} else {
		$alert = _error::_alert_db("file theme not exist!!!");
		die($alert);
	}
} else {
	$alert = _error::_alert_db("theme sasi not found!!!");
	die($alert);
}

abstract class dashboard_template extends sasi_template
{
	public static $extend = "theme sasi";
}
