<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends RS_Controller {
		function __construct(){ 
			parent::__construct();
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
			$post = $this->input->post();
			$count = $this->user->checkIfUserExist($post['email_id']);
			if($count == 0 ){
				echo json_encode(array("Message"=>"User does not exist. Please sign up first","code"=>404));
				exit;
			}
			$result = $this->user->userAuthentication($post);
 
			if(count($result) > 0) {
					$user_data = $this->user->getUserData($result['id']);
					$this->session->set_userdata("user_info",$user_data);
					echo json_encode(array("Message"=>"User Authenticated","code"=>200));
					// redirect("user/account");
				}
			else{
				echo json_encode(array("Message"=>"Wrong Email address or password","code"=>401));	
			}
			exit;
		}

		public function account() {
			$user_info = array();

			// $this->session->set_userdata("");
		}


	}
