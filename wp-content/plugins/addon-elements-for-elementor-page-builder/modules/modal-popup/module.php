<?php

namespace WTS_EAE\Modules\ModalPopup;

use WTS_EAE\Base\Module_Base;

class Module extends Module_Base {

	public function get_widgets() {
		return [
			'ModalPopup',
		];
	}

	public function get_name() {
		return 'eae-modalpopup';
	}

	function add_dependent_js_css() {
		parent::add_dependent_js_css(); // TODO: Change the autogenerated stub
		wp_enqueue_script('wts-magnific');
	}
}