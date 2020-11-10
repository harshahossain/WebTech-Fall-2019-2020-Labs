<?php include_once"../Lab 06/req/register_validation.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<h1>Welcome to Registration</h1>
	<form action="" method="post">
		<table>
			<tr>
				<td><strong>Full Name: </strong></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><strong>Username: </strong></td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td><strong>Password</strong></td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td><strong>Confirm Password: </strong></td>
				<td><input type="text" name="cpass"></td>
			</tr>
			<tr>
				<td><strong>Gender: </strong></td>
				<td><input type="radio" name="gender" value="male"><strong>Male</strong></td>
				<td><input type="radop" name="gender" value="female"><strong>Female</strong></td>
			</tr>
			<tr>
				<td><strong>E-mail Address: </strong></td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><strong>Contact No.:</strong></td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td><strong>City: </strong></td>
				<td><select name="city">
					<option>Ahmedabad</option>
					<option>Dhaka</option>
					<option>Rajshahi</option>
					<option>Sylhet</option>
				</select></td>
			</tr>
			<tr>
                <td colspan="2" align="center"><input type="submit" name="register" value="OK"></td>
            </tr>
		</table>
	</form>
</body>
</html>