<?php
include_once "/../connect.php";
include_once "/../dao/viewDao.php";
include_once "/../dao/tagDao.php";
$action = '';

$flame_tag = getTagCount();

if(isset($_GET['article']) && isset($_GET['id'])){
	$action = 'article';
	$id = $_GET['id'];
	$article = getArticle($id);
	$list_tag = getTagByArticle($id);
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
	$list_tag = getAllTags();
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

if($action == 'home'){
	$list_articles = getAllActiveArticles();
	$html_row_1 = '';
	$html_row_2 = '';
	$html_row_3 = '';
	foreach ($list_articles as $key => $value) {
		$data = array();
		$data['id'] = $key;
		$data['title'] = $value[0]['title'];
		$data['picture'] = $value[0]['media'];
		$list_tag = getTagByArticle($key);
		$article = include('partial/preview_article.php');
		if($key % 3 == 1){
			$html_row_1 .= $article;
		}else if($key % 3 == 2){
			$html_row_2 .= $article;
		}else if($key % 3 == 0){
			$html_row_3 .= $article;
		}
	}
}