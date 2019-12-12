<!DOCTYPE html>
<html>
<head>
	<title>Registration </title>
</head>
<body>

	<form method="POST" action="regCheck.php">
		<fieldset>
			<legend>Registration</legend>
			<div> Id </div>
			<div> <input type="text" name="id"> </div>
			<div> Password: </div>
			<div> <input type="password" name="pass"> </div>
			<div> Confirm Password: </div>
			<div> <input type="password" name="cpass"> </div>
			<div> Name: </div>
			<div> <input type="text" name="name"> </div>
			<div> Email: </div>
			<div> <input type="text" name="email"> </div>
		    <div> User Type <i> [User/Admin] </i></div>
			<div> <select name = "utype">
			<option value = "Renttaker"> User </option>
			<option value = "Rentgiver"> Admin </option>
			</select>
			<hr>
				<div><input type="submit" name="submit" value="Register"><a href="login.php">Login</a></div>
				
		</fieldset>
	</form>

	
</body>
</html>