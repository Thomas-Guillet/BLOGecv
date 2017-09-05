<?php
function getAllActiveArticles(){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM article WHERE state = 'enable'");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}
function getArticle($id){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM article WHERE id = $id");
	$sth->execute();

	$result = $sth->fetch();

	return $result;
}
function saveNewArticle($vars){
	global $bdd;

	$req = $bdd->prepare("INSERT INTO article (title, content, media, user_id) VALUES (:title, :content, :media, :user_id)");
    $req->execute(array(
            "title" => $vars['title'], 
            "content" => $vars['content'],
            "media" => $vars['media'],
            "user_id" => $vars['user_id']
            ));
    return $bdd->lastInsertId();
}
function getAllArticles(){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM article AS a INNER JOIN user AS u ON a.user_id = u.id WHERE a.state = 'enable' OR a.state = 'pending' ORDER BY a.id DESC");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}