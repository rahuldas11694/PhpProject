<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RS_Controller  extends CI_Controller { 

	public $data = array();
	function __construct() {
		parent::__construct();
		$this->load->helper("url");
			$this->load->model('user_model','user');
		$this->user_loged_in = $this->session->userdata("user_info");
			var_dump($this->user_loged_in); //die;
			if($this->user_loged_in !== null){
				redirect("user/account");
			}else{
				// redirect("/home/login");
				header("Location: /home/login");
			// $this->smarty->view("login.tpl");
			}
	}

	public function index(){
		
	}

}

class MY_fronendcontroller extends CI_Controller {
	public $myfc = "this is  MY_fronendcontroller";

	function __construct(){
		parent::__construct();
		echo ENVIRONMENT;
		// ENVIRONMENT != 'development' || $this->output->enable_profiler(true);
	}
}
 
