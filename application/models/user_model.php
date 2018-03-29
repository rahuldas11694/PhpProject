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
			$sql = "SELECT id, first_name, last_name, email_id, created_on FROM users WHERE email_id = ? AND password = ?";
			$result = $this->db->query($sql, array($get['email_id'],$get['password']))->row_array();
			return $result;

		}

		public function getUserData($id){
			$sql = "SELECT first_name, last_name, email_id, created_on FROM users WHERE id =?";
			$result = $this->db->query($sql, array($id))->row_array();
			return $result;
		}
	}
