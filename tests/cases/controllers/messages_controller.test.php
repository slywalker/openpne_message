<?php
/* Messages Test cases generated on: 2009-11-30 12:11:02 : 1259550542*/
App::import('Controller', 'Messages');

class TestMessagesController extends MessagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MessagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.message', 'app.member');

	function startTest() {
		$this->Messages =& new TestMessagesController();
		$this->Messages->constructClasses();
	}

	function endTest() {
		unset($this->Messages);
		ClassRegistry::flush();
	}

}
?>