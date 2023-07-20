<?php
use PHPUnit\Framework\TestCase;
use Sy\Component\Html\Page;
use Sy\Component\Web\GoogleTagManager;

class GoogleTagManagerTest extends TestCase {

	public function testConstruct() {
		$minify = function ($code) {
			$code = str_replace(array("\t", "\r", "\n"), '', $code);
			$code = preg_replace('/\s+/', ' ', $code);
			$code = str_replace(array('> <'), '', $code);
			return trim($code);
		};
		$page = new Page();
		$page->addBody(new GoogleTagManager('GTM-123456'));
		$this->assertEquals($minify(file_get_contents(__DIR__ . '/result.html')), $minify(strval($page)));
	}

}