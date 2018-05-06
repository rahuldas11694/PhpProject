<?php 
	spl_autoload_register(function($className){
		$path  = strtolower($className) .".php";
		// echo "PATH\n".$path;

		if(file_exists($path))
			require_once($path);
		else{
			echo "File $path does not exist!";
		}


	})
 ?>