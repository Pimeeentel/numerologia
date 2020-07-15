<?php
session_start();
if(!isset($_SESSION['login'])) {
	header("Location: login.php?r=restrito");
	exit;
}
require 'conecta.php';

				$sql = "SELECT * FROM user WHERE id = :id";
				$sql = $pdo->prepare($sql);
				$sql->bindValue(":id", $_SESSION['login']);
				$sql->execute();

				if($sql->rowCount() > 0) {
					$user = $sql->fetch();
				}

				if(isset($_POST['email']) && !empty($_POST['email'])) {

					$nome = addslashes($_POST['nome']);
					$senha = addslashes($_POST['senha']);
					$email = addslashes($_POST['email']);
					$adminn = addslashes($_POST['admin']);

					$sql = "INSERT INTO user SET email = :email, senha = :senha, nome = :nome, admin = :admin";
					$sql = $pdo->prepare($sql);
					$sql->bindValue(":email", $email);
					$sql->bindValue(":senha", md5($senha));
					$sql->bindValue(":nome", $nome);
					$sql->bindValue(":admin", intval($adminn));
					$sql->execute();

				}

if ($user['admin'] == 0) {
	header("Location: index.php");
}


?>

<!DOCTYPE html>
<html lang="PT-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<title>Numerologia</title>
</head>
<body>

		<div class="container">
			<div class="row justify-content-around align-items-center" style="padding:10px;">
				<div class="col-md text-center">
					<img src="assets/images/logo.png" alt="Logo Numerologia Cabalística" class="rounded img-fluid" width="100">
					<h6>Calculadora Numerologia Cabalistica</h6>
				</div>
				<div class="col text-center">
					<h4>Olá <?php echo $user['nome']; ?></h4>
				</div>
				<div class="col text-center">
					<a href="index.php" class="btn btn-secondary">Inicio</a>
					<!--<a href="salvos.php" class="btn btn-primary">Itens Salvos</a>	-->
					<a href="users.php" class="btn btn-warning">Usuários</a>	
					<a href="sair.php" class="btn btn-danger">Sair</a>	
				</div>
			</div>

				
			<div class="container">
				<div class="row  justify-content-around">
					<div class="col">
						<h4>Adicionar Novo Usuário</h4>
						<form method="POST">
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">Nome:</div>
								</div>
								<input id="nome" type="text" name="nome" class="form-control" required>
							</div><br>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">Email:</div>
								</div>
								<input id="email" type="email" name="email" class="form-control" required>
							</div><br>
							<div class="input-group">
								<div class="input-group-prepend">
									<div class="input-group-text">Senha:</div>
								</div>
								<input id="senha" type="password" name="senha" class="form-control" required>
							</div><br>
							<p>Administrador?</p>
							<label class="radio-inline">
					     		<input type="radio" name="admin" value="0" checked>Não
					   		</label>
					    	<label class="radio-inline">
					     		<input type="radio" name="admin" value="1">Sim
					    	</label><br>
					    	<input type="submit" value="Adicionar" class="btn btn-primary">
						</form>
					</div>

					<div class="col">
							<ul class="list-group">
					  		<h4>Usuários</h4>
							<?php
								$sql = "SELECT * FROM user ORDER BY id DESC";
								$sql = $pdo->prepare($sql);
								$sql->execute();

							if($sql->rowCount() > 0) {
								$usuarios = $sql->fetchAll();
								foreach($usuarios as $u): ?>
				
							  <li class="list-group-item d-flex justify-content-between">
							  	<?php echo $u['nome']; ?>
							  	<a href="excluiruser.php?result=<?php echo $u['id']; ?>" class="btn btn-danger btn-mini" <?php if($_SESSION['login'] == $u['id']): ?> style="visibility: hidden <?php endif; ?>">Excluir</a>
							  </li>
							<?php endforeach; ?>
							<?php } ?>
							</ul>
						</div>
					</div>
				</div>


	<script type="text/javascript" src="assets/js/jquery-3.4.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/js/vocacional.js"></script>

</body>
</html>