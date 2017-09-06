<?php
include_once "../connect.php";
include_once "../dao/articleDao.php";

$vars = array();
$vars['pseudo'] = htmlentities($_GET['pseudo']);
$vars['content'] = htmlentities($_GET['content']);
$vars['article_id'] = $_GET['article_id'];
$commentaire = saveNewCommentaire($vars);
echo $commentaire;