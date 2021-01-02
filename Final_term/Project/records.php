<!DOCTYPE html>
<html>
<head>
	<title>Update Information</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
  		<div class="container">
    		<h1 class="display-4">Patients Records</h1>
    		<p class="lead">Welcome to XYZ hospital. Use the table below to sort out patients informations & expenses.</p>
 		 </div>
 	</div>
 	<table class="table table-hover" align="center">
 			<tr>
 				<th>Paitent ID</th>
 				<th>First Name</th>
 				<th>Last Name</th>
 				<th>Expenses</th>
 				<th>Paid</th>
 				<th>Profit</th>
 				<th>Upcoming Appointment/s</th>

 			</tr>
 			<?php
 				$users=simplexml_load_file("Pinfo.xml");
 				$data=$patients->patient;
 				$firstName="";
 				$lastName="";
 				$expense="";
 				$paid="";
 				$uapp="";
 				$uid="";
 				$profit="";
 				$i=0;
 				for( ;$i<count($data);$i++){
 					$firstName=$data[$i]->fName;
 					$lastName=$data[$i]->lname;
 					$uid=$data[$i]->id;
 					$expense=$data[$i]->expense;
 					$paid=$data[$i]->paid;
 					$profit=$data[$i]->profit;
 					$uapp=$data[$i]->uappointment;
 					

 					echo "<tr>
 							<td>$uid</td>
 							<td>$firstName</td>
 							<td>$lastName</td>
 							<td>$expense</td>
 							<td>$paid</td>
 							<td>$profit</td>
 							<td>$uapp</td>

 						 </tr>";
 				}	

 			?>
 			 
 	</table>
 	 <a href="Ahomepage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Accountant Homepage</a>
 			  <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" disabled>Home</a> <br>
 			  <form action="" method="post"><input type="submit" name="logout" value="Logout"></form>
</body>
</html>