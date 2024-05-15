<?php
(!defined('THEMEPATH')) ? exit : '';

class theme_js
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
    private function dashboard_js($idx = array())
    {
        $loc = $this->lokasi();
        $css = array(
            'accordion_js'          => $loc . 'js/accordion.js',
            'image_round_tooltip'   => $loc . 'js/image_round_tooltip.js',
            'clock_realtime'   => $loc . 'js/clock_realtime.js',
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
