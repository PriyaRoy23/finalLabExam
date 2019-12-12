<?php
	
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="POST" action="logCheck.php">
		<fieldset>
			<legend>Login</legend>
		<div> User Id </div>
			<div> <input type="text" name="id"> </div>
			<div> Password: </div>
			<div> <input type="password" name="pass"> </div>
			<hr>
				<div><input type="submit" name="submit" value="Login"><a href="reg.php">Registration</a></div>
				
		</fieldset>
	</form>

	
</body>
</html>