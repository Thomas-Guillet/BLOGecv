<?php
function getTagByArticle($id){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM tag_article AS ta INNER JOIN tag AS t ON ta.tag_id = t.id WHERE ta.article_id = $id LIMIT 3");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}
function getAllTags(){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM tag");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}
function saveNewTag($article_id, $tag_id){
	global $bdd;

	$req = $bdd->prepare("INSERT INTO tag_article (tag_id, article_id) VALUES (:tag_id, :article_id)");
    $req->execute(array(
            "tag_id" => $tag_id, 
            "article_id" => $article_id
            ));
    return $bdd->lastInsertId();
}
function deleteTagArticle($article_id){
	global $bdd;
	$req = $bdd->prepare("DELETE FROM tag_article WHERE article_id =  :article_id"); 
	$req->execute(array(
            "article_id" => $article_id
            ));
}
function getArticlesByTag($tag_id){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM tag_article AS ta INNER JOIN article AS a ON ta.article_id = a.id WHERE ta.tag_id = $tag_id AND a.state = 'enable' GROUP BY a.id ORDER BY a.id DESC");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}