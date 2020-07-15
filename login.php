<?php
session_start();
require 'conecta.php';

if(isset($_POST['email']) && !empty($_POST['email'])) {

	$email = addslashes($_POST['email']);
	$senha = $_POST['senha'];

	$sql = "SELECT * FROM user WHERE email = :email AND senha = :senha";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch();
			$_SESSION['login'] = $array['id'];
			$id = $array['id'];
			header("Location: index.php");
		} else {
			echo "<h3 style='background-color:blue; color:white;'>Senha e/ou usuario incorreto.</h3>";
		}
}

?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<title>Login - Numerologia Cabalistica</title>
</head>
<body style="background-color: rgb(220,212,255);">
<br><br><br>
	<div class="container">
		<div class="row">
				<div class="col-sm-6" align="center">
					<img src="assets/images/logo.png" width="250">
					<h5>Calculadora de Numerologia Cabalística</h5>
				</div>
				<div class="col-sm-6">
					<?php if(isset($_GET['r'])): ?>
						<!--<div class="alert alert-danger" align="center">
							Acesso Restrito<br>
							Entrar com login e senha.
						</div>-->
					<?php endif; ?>
					<form method="POST">
						<div class="form-group">
								<label for="email">Email:</label>
								<input type="email" name="email" class="form-control" required>
							</div>
							<div class="form-group">
								<label for="senha">Senha:</label>
								<input type="password" name="senha" class="form-control" required>
							</div>
							<input type="submit" value="Login" class="btn btn-primary">
					</form><hr>
					<p>Está com problemas? envie e-mail para <a href="mailto:numerologiacabalistica@hotmail.com" target="_top">numerologiacabalistica@hotmail.com</a></p>
				</div>	
			</div>
	</div>
	

<script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>