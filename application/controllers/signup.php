<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Signup extends RS_Controller {
		function __construct(){
			parent::__construct();
			// $this->load->library('smarty');
			echo "INSIDE A";
			// $this->smarty->view('index.tpl');

		}

		public function index(){
			echo "inside sign up";
		}

		public function signup(){
			$login_form = "Login Form";
			$this->smarty->assign("login_form",$login_form);
			$this->smarty->view("login.tpl");
		}
	}
