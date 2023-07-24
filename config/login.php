<?php 
session_start(); 
require "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: ../error.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: ../error.php?error=Password is required");
	    exit();
	}else{
		if ($statement = $conn->prepare('SELECT id, password FROM users WHERE user_name = ?')) {
			$statement->bind_param('s', $uname);
			$statement->execute();
		
			$statement->store_result();
		
		if ($statement->num_rows > 0) {
			$statement->bind_result($id, $password);
			$statement->fetch();
			if (password_verify($pass, $password)) {
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['user_name'] = $uname;
				$_SESSION['id'] = $id;
				header('Location: ../index.php');
			} else {
				echo 'Incorrect username and/or password!';
			}
		} else {
			echo 'Incorrect username and/or password!';
		}
		
			$statement->close();
		}
	}
	
}else{
	header("Location: ../index.php");
	exit();
}