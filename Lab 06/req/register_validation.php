<?php
	$name="";
	$err_name="";

	$pass="";
	$err_pass="";

	$cpass="";
	$err_cpass="";

	$gender="";
	$err_gender="";

	$email="";
	$err_email="";

	$phone="";
	$err_phone="";

	$city="";
	$err_city="";

	$has_error=false;

	if (isset($_POST["register"])) {
	  	if(empty($_POST["name"]))
	  	{
	  		$err_name="Name Required";
	  		$has_error=true;
	  	}
	  	else
	  	{
	  		$name=htmlspecialchars($_POST["name"]);
	  	}
	  	if (empty($_POST["uname"])) {
	  		$err_uname="Username Requried!";
	  		$has_error=true;
	  	}
	  	elseif (strlen($_POST["uname"])<6) {
	  		$has_error=true;
	  		$err_uname="Username must contain at least 6 charecters";
	  	}
	  	elseif (strpos($_POST["uname"]," ")) {
	  		$err_uname="Username cannot contain space!";
	  		$has_error=true;
	  	}
	  	else{
	  		$uname=htmlspecialchars($_POST["uname"]);
	  	}
	  	if (empty($_POST["email"])) {
	  		$err_email="Email Requried!";
	  		$has_error=true;
	  	}
	  	elseif (!strpos($_POST["email"],"@")) {
	  		$err_email="Email must contain '@'!";
	  		$has_error=true;
	  	}
	  	else{
	  		$email=htmlspecialchars($_POST["emial"]);
	  	}
	  	if (empty($_POST["pass"])) {
	  		$err_pass="Password Requried";
	  		$has_error=true;
	  	}
	  	elseif (!ctype_upper($_POST["pass"])|| !ctype_lower($_POST["pass"])) {
	  		$err_pass="Password must contain a combination of uppercase and lowercase charecters!";
	  		$has_error=true;
	  	}
	  	elseif (!strpos($_POST["pass"], "1") || !strpos($_POST["pass"]),"?") {
	  		$err_pass="Password must contain at least one special charecter(Ex: 1 or ?) !";
	  		$has_error=true;
	  	}
	  	else{
	  		$pass=htmlspecialchars($_POST["pass"]);
	  	}
	  	if (empty($_POST["cpass"])) {
	  		$err_cpass="Please confirm password!";
	  		$has_error=true;
	  	}
	  	elseif (!$_POST["pass"]==$_POST["cpass"]) {
	  		$err_cpass="Password does not match!";
	  		$has_error=true;
	  	}
	  	else{
	  		$cpass=htmlspecialchars($_POST["cpass"]);
	  	}
	  } 
 ?>