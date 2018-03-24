<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends RS_Controller {
		function __construct(){
			parent::__construct();
			// $this->load->library('smarty');
			$this->smarty->assign("template",'login.tpl');
			$this->smarty->view('index.tpl');

		}

		public function login(){
			$login_form = "Login Form";
			$this->smarty->assign("login_form",$login_form);
			$this->smarty->view("login.tpl");
		}
	}
