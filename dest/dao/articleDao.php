<?php
function getAllActiveArticles(){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM article WHERE state = 'enable' ORDER BY id DESC");
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
function updateStateArticle($vars){
	global $bdd;

	$req = $bdd->prepare("UPDATE article SET state = :state WHERE id = :article_id");
    $req->execute(array(
            "state" => $vars['state'],
            "article_id" => $vars['article_id']
            ));
    return $req->rowCount();
}
function getAllArticles(){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM article AS a INNER JOIN user AS u ON a.user_id = u.id WHERE a.state = 'enable' OR a.state = 'pending' ORDER BY a.id DESC");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}
function getArticleComment($id){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM commentaire AS c INNER JOIN commentaire_article AS ca ON ca.commentaire_id = c.id WHERE c.state = 'enable' AND ca.article_id = $id ORDER BY c.id DESC");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);
	return $result;
}
function saveNewCommentaire($vars){
	global $bdd;

	$req = $bdd->prepare("INSERT INTO article (pseudo, content) VALUES (:title, :content)");
    $req->execute(array(
            "title" => $vars['pseudo'], 
            "content" => $vars['content']
            ));
    return $bdd->lastInsertId();
}