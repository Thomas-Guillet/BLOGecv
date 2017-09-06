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
function updateArticle($vars){
	global $bdd;
	if(!$vars['media']){
		$req = $bdd->prepare("UPDATE article SET title = :title, content = :content WHERE id = :article_id");
	    $req->execute(array(
	            "title" => $vars['title'], 
	            "content" => $vars['content'],
	            "article_id" => $vars['article_id']
	            ));
	}else{
		$req = $bdd->prepare("UPDATE article SET title = :title, content = :content, media = :media WHERE id = :article_id");
	    $req->execute(array(
	            "title" => $vars['title'], 
	            "content" => $vars['content'],
	            "media" => $vars['media'],
	            "article_id" => $vars['article_id']
	            ));		
	}
    return $req->rowCount();
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
function getArticleCommentAdmin($id){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM commentaire AS c INNER JOIN commentaire_article AS ca ON ca.commentaire_id = c.id WHERE (c.state = 'enable' OR c.state ='pending') AND ca.article_id = $id ORDER BY c.id DESC");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);
	return $result;
}
function saveNewCommentaire($vars){
	global $bdd;

	$req = $bdd->prepare("INSERT INTO commentaire (pseudo, content) VALUES (:pseudo, :content)");
    $req->execute(array(
            "pseudo" => $vars['pseudo'], 
            "content" => $vars['content']
            ));

    $commentaire_id = $bdd->lastInsertId();

    $req = $bdd->prepare("INSERT INTO commentaire_article (commentaire_id, article_id) VALUES (:commentaire_id, :article_id)");
    $req->execute(array(
            "commentaire_id" => $commentaire_id, 
            "article_id" => $vars['article_id']
            ));

    return $commentaire_id;
}
function admincommentaire($vars){
	global $bdd;

	$req = $bdd->prepare("UPDATE commentaire SET state = :state WHERE id = :commentaire_id");
    $req->execute(array(
            "state" => $vars['state'],
            "commentaire_id" => $vars['commentaire_id']
            ));
    return $req->rowCount();
}