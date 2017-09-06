<?php
include_once "../connect.php";
include_once "../dao/articleDao.php";

$vars =array();
$action = $_GET['action'];
$vars['commentaire_id'] = $_GET['commentaire_id'];
if($action =='valid'){
	$vars['state'] = 'enable';
}else{
	$vars['state'] = 'disable';
}
$commentaire = admincommentaire($vars);
echo $vars['state'];