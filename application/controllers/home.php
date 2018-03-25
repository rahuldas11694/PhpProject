<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends RS_Controller {
		function __construct(){
			parent::__construct();
			$this->load->helper("url");
			$this->load->model('user_model','user');
			$this->smarty->assign("template",'signup.tpl');
			$this->smarty->view('index.tpl');

		}

		public function login(){
			$login_form = "Login Form";
			$this->smarty->assign("login_form",$login_form);
			$this->smarty->view("login.tpl");
			$data = $this->input->post();
		}

		public function signup(){
			$data = $this->input->post();
			// print_array($data);
			$count = $this->user->checkIfUserExist($data["email_id"]);
			if($count>0){
				echo true; exit; //json_encode(array("user_exists"=>true)); exit;
			}

			$result = $this->user->addNewUser($data);

			if($result === true){ echo "IN IF";
				echo "A"; //added
			}

		}

		public function checkUser() {
			// $uname = $this->input->get("uname");
			// $pwd = $this->input->get('pwd');
			$this->user->userAuthentication($this->input->get());
		}
	}
