<?php

(!defined('THEMEPATH')) ? exit : '';

define('_theme_name', 'dashboard_layout');
define('_theme_folder', '../theme/sasi');

require dirname(__FILE__) . '/css.php';
require dirname(__FILE__) . '/js.php';

if (is_dir(THEMEPATH . '/sasi')) {
	$dir = THEMEPATH . '/sasi/';
	if (file_exists($dir . 'scripts.php')) {
		require $dir . 'scripts.php';
	} else {
		$alert = _error::_alert_db("file theme not exist!!!");
		die($alert);
	}
} else {
	$alert = _error::_alert_db("theme sasi not found!!!");
	die($alert);
}

class dashboard_layout extends dashboard_template
{

	private static function _clearfix()
	{
?>
		<div class="clearfix"></div>
	<?php
	}

	public static function load_here($data = [])
	{

	?>
		<div class="wrapper">
			<div id="here_content" class="containt">
				<?= parent::_modal_form(2); ?>
				<?= self::sobad_grid($data); ?>
				<?= self::_clearfix(); ?>
			</div>


		</div>

<?php

	}
}
