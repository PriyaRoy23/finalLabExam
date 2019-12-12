<?php
	//session_start();
	if(isset($_COOKIE['username'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin's Home page</title>
</head>
<body>
<form align = 'center' method='POST'>
<fieldset>
	<h1>Welcome <?=$_COOKIE['username']?> ! </h1> 
	
	<div> <a href="profile.php">Profile</a> </div>
	<div> <a href="changepass.php">Change Password</a></div> 
	<div> <a href="user.php">View Users</a></div> 
	<div><a href="logout.php">logout</a></div>
</fieldset>
</form>
</body>	
</html>


<?php		
	}else{
		header('location: login.php');
	}

?>

