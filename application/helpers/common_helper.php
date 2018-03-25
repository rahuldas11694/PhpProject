<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	 function print_array($arr,$str='DATA->'){
			echo "".$str."\n";
			echo "<pre>";
			print_r($arr);
			echo "</pre>";
	}

?>