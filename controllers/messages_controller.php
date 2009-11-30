<?php
class MessagesController extends AppController {

	public $name = 'Messages';

	public function index() {
		$this->Message->recursive = 0;
		$this->paginate = array('order' => array('Message.r_datetime' => 'DESC'));
		$this->set('messages', $this->paginate());
	}

}
?>