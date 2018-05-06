<?php 
	require_once("functions.php");
	// when we instantiate a class the above functions.php autoload all the
	// classess from following Class;
	// so it will autoload api.php followed by rest.php bcz api.php extends rest.php class
	$api = new Api();
	//row data to get from user
/*	{
		"name": "generateToken",
		"param" : {
			"email": "rahul.survase@gmail.com",
			"pass" : "pass123"
		}
	}*/
 ?>