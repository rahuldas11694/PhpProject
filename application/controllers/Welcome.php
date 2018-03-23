<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends RS_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index() {
		echo "welcome in index";
		$this->data['user'] = "rahul";
		echo "hii";
		$this->load->view('welcome_message',$this->data);
	}
}

