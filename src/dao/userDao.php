<?php

function getUser($id) {
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM user WHERE id = '".$id."'");
	$sth->execute();

	$result = $sth->fetch(PDO::FETCH_ASSOC);

	return $result;
}

function getUserByMail($mail) {
	global $bdd;
	$sth = $bdd->prepare("SELECT * FROM user WHERE mail = '".$mail."'");
	$sth->execute();

	$result = $sth->fetch();

	return $result;
}


