<?php

include '../../db/config.php';

if(isset($_POST['login'])){
	$emp_un = $_POST['username'];
	$emp_pw = $_POST['password'];

	$p = array(
		'username' => $emp_un,
		'password' => $emp_pw
	);

	$login = $db->loginempAccount($p);
	if($login){
		session_start();
		$_SESSION['login'] = $login;
		header("location: ../index.php");
	}else{
		header("location: ../login.php?success=false");
	}
}