<?php
include_once "/../connect.php";
include_once "/../dao/viewDao.php";
$action = '';

$flame_tag = getTagCount();

if(isset($_GET['article']) && isset($_GET['id'])){
	$action = 'article';
	$id = $_GET['id'];
	$article = getArticle($id);
	if(isset($_SESSION['id'])){
		$list_commentaires = getArticleCommentAdmin($id);
	}else{
		$list_commentaires = getArticleComment($id);
	}
}else if(isset($_GET['connexion'])){
	$action = 'connexion';
}else if(isset($_GET['logout'])){
	session_destroy();
	header('Location: /'); 
}else if(isset($_GET['new'])){
	if(isset($_SESSION['id'])){
		$action = 'new';		
	}else{
		$action = 'home';
	}
}else if(isset($_GET['edit']) && isset($_GET['id'])){
	$id = $_GET['id'];
	$article = getArticle($id);
	if(isset($_SESSION['id'])){
		$action = 'edit';		
	}else{
		$action = 'home';
	}
}else if(isset($_GET['all_articles'])){
	if(isset($_SESSION['id'])){
		$action = 'list_article';
		$list_article = getAllArticles();
	}else{
		$action = 'home';
	}
}else{
	$action = 'home';
}