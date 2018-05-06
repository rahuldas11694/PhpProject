<?php 
 // defined('BASEPATH') OR exit('No direct script access allowed');

	class Rest {
		public function __construct(){
			echo "THIS EXECUTED";
			$handler = fopen("php://input", "rb");
			echo "HANDLER   ".$handler; 
			$result = stream_get_contents($handler);
			echo"data-". var_dump($result);
		}

		public function validateResponse(){

		}

		public function processRequest(){

		}

		public function validateParameter($fieldName, $value, $dataType, $required){

		}

		public function throError($code, $message){

		}

		public function returnResponse(){

		}



	}


 ?>