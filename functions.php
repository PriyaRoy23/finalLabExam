<?php
	require_once('db.php');

	function validate($id, $password){
		$conn = getConnection();
		$sql = "select * from user where Id='{$id}' and Password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}


	function register($name, $password, $email, $id, $cpass){
		$conn = getConnection();
		$sql = "insert into user values('{$name}','{$password}', '{$email}', '{$id}', '{$cpass}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	
?>