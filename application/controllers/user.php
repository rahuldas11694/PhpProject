<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends RS_Controller {

		function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->model('user_model','user');
		}

		public function index(){
			die("died");
		}
		public function account(){
			// die("died in account");
			$this->smarty->assign("user_info",$this->session->userdata('user_info'));
			$this->smarty->view("user.tpl");
		}

		public function logout(){
			$this->session->sess_destroy();
			redirect("/home");
		}

	}