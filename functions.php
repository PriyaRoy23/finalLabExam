<?php
	require_once('db.php');

	function validate($uname, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$uname}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return count($user);
	}


	function register($uname, $password, $email, $id, $cpass){
		$conn = getConnection();
		$sql = "insert into user values('', '{$uname}','{$password}', '{$email}', '{$cpass}', '{$id}' 0)";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($data, $row);
		}
		return $data;
	}

	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id=".$id;
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>