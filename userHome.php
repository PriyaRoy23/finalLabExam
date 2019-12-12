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

	<h1>Welcome <?=$_COOKIE['username']?> ! </h1> 
	
	<a href="profile.php">Profile</a> | 
	<a href="changepass.php">Change Password</a> | 
	<a href="logout.php">logout</a>

</body>	
</html>


<?php		
	}else{
		header('location: login.php');
	}

?>

