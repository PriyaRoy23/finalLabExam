
 <?php
	session_start();
	require_once('functions.php');
	
	
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['pass'];
             $name = $_POST['name'];
		if(empty($id) == true || empty($password) == true){
			echo "null submission!";
		}else{

			$count = validate($id, $password);

			if($count > 0){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;

				setcookie("username", $name, time()+3600, "/");
				
				header('location: userHome.php');

			}else{
				echo "invalid userid/password";
			}
		}
	}else{
		header('location: login.php');
	}


?>
