<?php
require 'conecta.php';

if(isset($_GET['result'])) {
	$id = $_GET['result'];

	$sql = $pdo->prepare("DELETE FROM user WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	header("Location: users.php");
}
?>