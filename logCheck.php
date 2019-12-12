
 <?php
	session_start();
	require_once('functions.php');
	
	
	if(isset($_POST['submit'])){

		$id = $_POST['id'];
		$password = $_POST['pass'];

		if(empty($id) == true || empty($password) == true){
			echo "null submission!";
		}else{

			$count = validate($id, $password);

			if($count > 0){
				
				$_SESSION['id'] = $id;
				$_SESSION['password'] = $password;

				setcookie("userid", $id, time()+3600, "/");
				header('location: home.php');

			}else{
				echo "invalid userid/password";
			}
		}
	}else{
		header('location: login.php');
	}


?>
