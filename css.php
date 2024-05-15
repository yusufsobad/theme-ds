<?php
(!defined('THEMEPATH')) ? exit : '';

class theme_css
{
	public function _get_($func = '', $idx = array())
	{
		if (is_callable(array($this, $func))) {
			$script = self::$func($idx);
		} else {
			$script = array();
		}

		return $script;
	}

	private function lokasi()
	{
		return SITE . '://' . HOSTNAME . '/' . URL . '/theme/digital-signage/asset/';
	}


	// Dashboard Ui
	private function dashboard_ui($idx = array())
	{
		$loc = $this->lokasi();
		$css = array(
			'style'			=> $loc . 'css/style.css',
			'dashboard-ui'	=> $loc . 'css/dashboard-ui.css',
		);

		$check = array_filter($idx);
		if (!empty($check)) {
			foreach ($idx as $key) {
				$css[$key];
			}
		}

		return $css;
	}
}
