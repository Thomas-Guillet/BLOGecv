<?php
include_once "../connect.php";
include_once "../dao/articleDao.php";

if(isset($_GET['display_article']) && isset($_GET['id'])){
	$article_id = $_GET['id'];
	$vars = array();
	$vars['state'] = 'enable';
	$vars['article_id'] = $article_id;
	$article = updateStateArticle($vars);
	header('Location: /');
}else if(isset($_GET['remove_article']) && isset($_GET['id'])){
	$article_id = $_GET['id'];
	$vars = array();
	$vars['state'] = 'pending';
	$vars['article_id'] = $article_id;
	$article = updateStateArticle($vars);
	header('Location: /');
}else if(isset($_GET['delete_article']) && isset($_GET['id'])){
	$article_id = $_GET['id'];
	$vars = array();
	$vars['state'] = 'disable';
	$vars['article_id'] = $article_id;
	$article = updateStateArticle($vars);
	header('Location: /');
}

