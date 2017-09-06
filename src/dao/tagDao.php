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