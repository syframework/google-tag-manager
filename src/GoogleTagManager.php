<?php
namespace Sy\Component\Web;

use Sy\Component\WebComponent;

class GoogleTagManager extends WebComponent {

	/**
	 * Google Tag Manager id
	 *
	 * @var string
	 */
	private $id;

	/**
	 * @param string $id
	 */
	public function __construct($id) {
		parent::__construct();
		$this->id = $id;
		$this->mount(function () {
			$this->init();
		});
	}

	private function init() {
		$this->setTemplateFile(__DIR__ . '/gtm.html');
		$this->setVar('ID', $this->id);

		$js = new WebComponent();
		$js->setTemplateFile(__DIR__ . '/gtm.js');
		$js->setVar('ID', $this->id);
		$this->addJsCode($js, array('position' => WebComponent::JS_TOP, 'type' => 'text/javascript'));
	}

}