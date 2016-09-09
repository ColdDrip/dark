<?php

function getData() {
	$query = MySQL::getInstance()->query("SELECT * FROM Structure ORDER BY posted DESC");
	return $query->fetchALL();
}

function publishData($message) {
	$query = MySQL::getInstance()->prepare("INSERT INTO Structure (posted, message) VALUES (:posted,:message)");
	$query->bindValue(":posted", date("Y-m-d H:i:s"), PDO::PARAM_STR);
	$query->bindValue(":message", $message, PDO::PARAM_STR);
	$query->execute();
}

?>
