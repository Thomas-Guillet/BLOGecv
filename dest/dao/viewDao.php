<?php
function getTagCount(){
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM nb_article_by_date as v INNER JOIN tag AS t ON v.tag = t.id ORDER BY v.nb_article DESC LIMIT 5");
	$sth->execute();

	$result = $sth->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_GROUP);

	return $result;
}