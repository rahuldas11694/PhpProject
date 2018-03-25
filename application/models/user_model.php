<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

	class User_Model extends RS_Model {
		function __construct(){
			parent::__construct();
			$this->load->library('smarty');
		}

		public function addNewUser($data){

			unset($data['psw-repeat']);
			$data["created_on"] = date('Y-m-d H:i:s');

			$sql = $this->db->insert('users',$data);
			return $sql;
		}

		public function checkIfUserExist($email){

			$sql = "SELECT email_id FROM users where email_id=?";
			$this->db->query($sql, array($email));
			$count = $this->db->affected_rows();
			return $count;
		}

		public function userAuthentication($get){

			$count = $this->checkIfUserExist($get['email_id']);
			if($count > 0){
				$sql = "SELECT id FROM users WHERE email_id ? AND password = ?";
				$result = $this->db->query($sql, array($get['email_id'],$get['pwd']));
				$count = $this->db->affected_rows();
				if($count > 0){
					echo json_encode(array("Message"=>"Success","code"=>200));
				}
				else{
					echo json_encode(array("Message"=>"Wrong Email address or password","code"=>401));	
				}
			}
			else {
				echo json_encode(array("Message"=>"User does not exist. Please sign up first","code"=>404));
			}
		}
	}
