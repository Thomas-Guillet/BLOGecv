<?php
include_once "../connect.php";
include_once "../dao/userDao.php";
$vars=array();
$vars['mail'] = $_GET['mail'];
$vars['password'] = $_GET['password'];
$connexion = connect_user($vars);
echo $connexion;

function connect_user($vars){
	session_start();

	$mail = $vars['mail'];
	$pass = $vars['password'];
	$user = getUserByMail($mail);
	if($user){
		if($user['password'] == $pass){
			$_SESSION['id'] = $user['id'];
			$_SESSION['prenom'] = $user['name'];
			$_SESSION['mail'] = $user['mail'];
			return $_SESSION['prenom'];			
		}else{
			return 'err_pass';
		}
	}else{
		$err_mail = true;
		return 'err_mail';
	}

}