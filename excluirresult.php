<?php
require 'conecta.php';

if(isset($_GET['result'])) {
	$id = $_GET['result'];

	$sql = $pdo->prepare("DELETE FROM salvos WHERE id = :id");
	$sql->bindValue(":id", $id);
	$sql->execute();

	header("Location: salvos.php");
}
?>