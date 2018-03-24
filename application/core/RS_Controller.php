<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RS_Controller  extends CI_Controller { 

	public $data = array();
	function __construct() {
		parent::__construct();
		// echo "RS_Controller\n"; 
	}

	public function index(){
		echo "INSIDE THIS";
	}

}

	// 

class MY_fronendcontroller extends CI_Controller {
	public $myfc = "this is  MY_fronendcontroller";

	function __construct(){
		parent::__construct();
		echo ENVIRONMENT;
		// ENVIRONMENT != 'development' || $this->output->enable_profiler(true);
	}
}
 
