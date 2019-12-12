<?php
	
	require_once('functions.php');

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$password = $_POST['pass'];
		$email = $_POST['email'];
		$id = $_POST['id'];
		$cpass = $_POST['cpass'];

		if(empty($name) == true || empty($password) == true || empty($email) == true || empty($id) == true || empty($cpass) == true){
			echo "null submission!";
		}else{

			$status = register($name, $password, $email, $id, $cpass);

			if($status){

				header('location: login.php');
			}else{
				header('location: reg.php');
			}
		}

	}

?>