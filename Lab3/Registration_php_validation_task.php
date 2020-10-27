<?php
	$name="";
	$err_name="";

	$username="";
	$err_username="";

	$password="";
	$err_password="";

	$cpassword="";
	$err_cpassword="";

	$email="";
	$err_email="";

    $code="";
    $err_code;

    $number="";
    $err_number="";

    $address="";
    $err_address="";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Club Member Registration</title>
</head>
<body>
	
		<hr> xddd
		
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registration</h1></legend>
				<table>
					<tr>
						<td align="right">Name:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td align="right">Username:</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
					<td align="right">Password:</td>
					<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td align="right">Email:</td>
						<td><input type="text" name="email"></td>
					</tr>
					<tr>
						<td align="right">Confirm Password:</td>
						<td><input type="password" name="cpassword"></td>
					</tr>
					<tr>
						<td align="right">Phone:</td>
					<td><input type="text" name="code" size="4" placeholder="code"><strong>  -  	</strong><input type="text" name="number"size="9" placeholder="Number"></td>
					</tr>
					<tr>
						<td align="right">Address:</td>
						<td><input type="text" name="address" placeholder="Street Address"> <br>
							<input type="text" name="city" placeholder="City" size="4"><strong>  -  </strong> <input type="text" name="" placeholder="State" size="9"><br>
							<input type="text" name="postalcode" placeholder="Postal/Zip Code">
						</td>
					</tr>
					<tr>
						<td align="right">Birth Date: </td>
						<td><select name="day">
							<option disabled="disabled" selected="selected">Day</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
						</select> <select name="month">
							<option disabled="disabled" selected="selected">Month</option>
							<option>Jan</option>
							<option>Feb</option>
							<option>Mar</option>
						</select> <select name="year">
							<option selected="selected" disabled="disabled">Year</option>
							<option>1997</option>
							<option>1998</option>
							<option>1999</option>
							<option>2000</option>
						</select></td>
					</tr>
					<tr>
						<td align="right">Gender:</td>
						<td><input type="radio" name="gender" value="male"> Male
							<input type="radio" name="gender" value="female"> Female
						</td>
					</tr>
					<tr>
						<td align="right">Where did you hear about us?</td>
						<td><input type="checkbox" name="heard[]" value="friend">A Friend or Colleague <br>
							<input type="checkbox" name="heard[]" value="google">Google <br>
							<input type="checkbox" name="heard[]" value="blog">Blog Post <br>
							<input type="checkbox" name="heard[]" value="news">News Article
						</td>
					</tr>
					<tr>
						<td align="right">Bio</td>
						<td><textarea name="bio"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit" name="register" value="Register"></td>
					</tr>

				</table>
			</fieldset>	
		</form>
	

</body>
</html>
