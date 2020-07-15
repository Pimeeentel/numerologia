<?php

try{
	$pdo = new PDO("mysql:dbname=mapanumerologi;host=localhost", "root", "");
} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
	exit;
}

?>
