<?php require_once 'model/accountant_db_connect.php';
	$firstName="";
	$lastName="";
	$email="";
	$phone="";
	$street="";
	$city="";
	$state="";
	$postal="";
	$date="";
	$month="";
	$year="";
	$gender="";
	$userType="";
	$status="";
	$uid="";

	if (isset ($_POST["update"])) {
		$firstName=$_POST["firstName"];
		$lastName=$_POST["lastName"];
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$street=$_POST["street"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$postal=$_POST["postal"];
		$date=(int)$_POST["bDate"];
		$month=$_POST["bMonth"];
		$year=(int)$_POST["bYear"];
		$gender=$_POST["gender"];
		$userType=$_POST["userType"];
		$status=$_POST["status"];
		$uid=(int)$_GET["id"];
		updateUser($firstName,$lastName,$email,$phone,$street,$city,$state,$postal,$date,$month,$year,$gender,$userType,$status);
	}
	function getAllUser(){
		$query="SELECT * FROM `users`";
		$result=get($query);
		return $result;
	}
	function getAUser($uid){
		$query="SELECT * FROM `users` WHERE `id`='$uid'";
		$result=get($query);
		return $result;
	}
	function updateUser($firstName,$lastName,$email,$phone,$street,$city,$state,$postal,$date,$month,$year,$gender,$userType,$status,$uid){
		$query="UPDATE `users` SET `firstName`='$firstName',`lastName`='$lastName',`email`='$email',`phone`='$phone',`street`='$street',`city`='$city',`state`='$state',`postal`='$postal',`bDate`='$date',`bMonth`='$month',`bYear`='$year',`gender`='$gender',`userType`='$userType',`status`='$status' 
			WHERE `id`='$uid'";
			execute($query);

	}
	function deleteUser($uid){
		$query="DELETE FROM users WHERE `id`='$uid'";
		execute($query);
	}
	function varifyUser($uid){
		$query="UPDATE `users` SET `status`='1' WHERE `id`='uid'";
		execute($query);
	}

 ?>
