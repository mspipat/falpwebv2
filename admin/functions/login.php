<?php

include '../../db/config.php';

if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$p = array(
		'username' => $username,
		'password' => $password
	);

	$login = $db->loginAccount($p);
	if($login){
		session_start();
		$_SESSION['login'] = $login;
		header("location: ../index.php");
	}else{
		header("location: ../login.php?success=false");
	}
}