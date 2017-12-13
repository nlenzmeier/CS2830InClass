<?php
	
	$username = empty($_COOKIE['username'])? '' : $_COOKIE['username'];
	
	if($username) {
		header("Location: page1.php");
		exit;
	}
	
	$action = empty($_COOKIE['action']) ? '' : $_COOOKIE['action'];
	
	if($action == 'do_login'){
		handle_login();
	} else {
		login_form();
	}
	
	function handle_login(){
		$username = empty($_POST['username'])? '' : $_POST['username'];
		$password = empty($_POST['password'])? '' : $_POST['password'];
		
		if($username == 'test' && $password == 'pass'){
			setcookie('username', $username);
			header("Location: page1.php");
		}
		else {
			$error = "Error: Incorrect username or password";
			require "login_form.php";
		}
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "login_form.php";
	}
?>