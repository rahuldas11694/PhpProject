<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends RS_Controller {
		function __construct(){
			parent::__construct();
			$this->load->library('smarty');
		}

		public function login(){
			echo "IN home.php";
			$login_form = "Login Form";
			$this->smarty->assign("login_form",$login_form);
			$this->smarty->view("login.tpl");

		}
	}
