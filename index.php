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

?>

<style type="text/css">
	#resultados{
		display: none;
	}

	#acertou, #acertou2, #acertou3, #acertou4, #conc, #profissao, #resultconjuge, #rubrica, #ass{
		display: none;
	}

	.coluna1{
	}

	.vibcar{
		background-color: #f0f0f0;
		padding: 10px;
	}

	#resultnome{
		display: none;
		padding: 40px;
		color: #f000c8;
		margin: 30px;
		text-transform: capitalize;
	}

	#resultnomeacerto, #resultnomeacerto2{
		padding: 5px;
		color: #f000c8;
		margin: 10px;
		text-transform: capitalize;
	}

	.nomefinal{
		font-size: 12px;
		font-weight: 900;
	}

	.valorfinal{
		font-size: 13px;
	}

	.rodape{
		background: rgb(188,103,249);
		background: linear-gradient(90deg, rgba(188,103,249,1) 0%, rgba(213,213,255,1) 50%, rgba(105,103,249,1) 100%);
		padding: 20px;
	}

	.lista{
		list-style-type: none;
		padding-left: 0;
	}

	.lista a{
		color: #FFFFFF;
	}

	.lista a:hover{
		text-decoration: none;
	}

	.bg{
		border: solid 1px;
		border-radius: 5px;
		background-color: #e3e3e3;
		padding: 14px 8px;
	}
</style>

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
						<!--<a href="salvos.php" <?php if($user['admin'] == 0): ?> style="visibility: hidden" <?php endif; ?> class="btn btn-primary">Itens Salvos</a>	-->
						<a href="users.php" class="btn btn-warning" <?php if($user['admin'] == 0): ?> style="visibility: hidden" <?php endif; ?>>Usuários</a>	
						<a href="sair.php" class="btn btn-danger">Sair</a>	
					</div>
				</div>
		</div><br>

	<div class="container">
		<div class="row">
			<div class="col">				
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">Nome Completo:</div>
					</div>
					<input id="txt1" type="text" name="nome" class="form-control" pattern="[a-zA-Z\s]+$" required>
				</div><br>

				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">Data de Nascimento:</div>
					</div>
					<input id="txt2" type="date" name="data" class="form-control" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2012-01-01" max="2014-02-18" required>
				</div>
			</div>
				<div class="col">
					<fieldset class="form-group">
				    <div class="row">
				      <legend class="col-form-label col-sm-2 pt-0">Gênero</legend>
				      <div class="col">
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino" checked>
				          <label class="form-check-label" for="masculino" value="masculino">
				            Masculino
				          </label>
				        </div>
				        <div class="form-check">
				          <input class="form-check-input" type="radio" name="genero" id="feminino" value="feminino">
				          <label class="form-check-label" for="feminino" value="feminino">
				            Feminino
				          </label>
				        </div>
				      </div>
				      <div class="btn-group col">
							<button class="btn btn-info" id="somar" onclick="somarValores()">Calcular</button>
						</div>
				    </div>
				  </fieldset>
				</div>
			</div><br>

			<div class="container">
				<div class="row justify-content-around align-items-center">
					<span id="resultnome">
						<br><br><br>
					</span>
				</div>
			</div>

			<div class="container" id="resultados">
				<div class="row">
					<div class="col-6 coluna1">

						<span>Motivação: </span>
						<span id="resulmotivacao">
							<button type="button" id="bmoti" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#moti"></button>
							<!-- Modal -->
							<div class="modal fade" id="moti" tabindex="-1" role="dialog" aria-labelledby="Motivação" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="moti">Motivação</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoti" class="modal-body">
							        <span id="titulomot"></span><br>
							        <span id="expmot"></span><br>
							        <span id="lpmot"></span><br>
							        <span id="lnmot"></span><br>
							        <span id="orimot"></span>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Impressão: </span>
						<span id="resulimpressao">
							<button type="button" id="bimp" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#imp"></button>
							<!-- Modal -->
							<div class="modal fade" id="imp" tabindex="-1" role="dialog" aria-labelledby="Impressão" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="imp">Impressão</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="timp" class="modal-body">
							        <span id="tituloimp"></span><br>
							        <span id="expimp"></span><br>
							        <span id="oriimp"></span>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Expressão: </span>
						<span id="resulexpressao">
							<button type="button" id="bexp" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exp"></button>
							<!-- Modal -->
							<div class="modal fade" id="exp" tabindex="-1" role="dialog" aria-labelledby="Expressão" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exp">Expressão</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="texp" class="modal-body">
							        <span id="tituloexp"></span><br>
							        <span id="expexp"></span><br>
							        <span id="lpexp"></span><br>
							        <span id="lnexp"></span><br>
							        <span id="oriexp"></span>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Destino: </span>
						<span id="resulimpressao">
							<button type="button" id="bdes" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#des"></button>
							<!-- Modal -->
							<div class="modal fade" id="des" tabindex="-1" role="dialog" aria-labelledby="Destino" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Destino</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdes" class="modal-body">
							        <span id="titulodes"></span><br>
							        <span id="expdes"></span><br>
							        <span id="lndes"></span><br>
							        <span id="orides"></span>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Missão: </span>
						<span id="resulimpressao">
							<button type="button" id="bmis" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#mis"></button>
							<!-- Modal -->
							<div class="modal fade" id="mis" tabindex="-1" role="dialog" aria-labelledby="Missão" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="mis">Missão</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmis" class="modal-body">
							        <span id="titulomis"></span><br>
							        <span id="expmis"></span><br>
							        <span id="lpmis"></span><br>
							        <span id="lnmis"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<span>Dia de Nascimento: </span>
						<span id="resulimpressao">
							<button type="button" id="bdna" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#dna"></button>
							<!-- Modal -->
							<div class="modal fade" id="dna" tabindex="-1" role="dialog" aria-labelledby="Dia de Nascimento" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Dia de Nascimento</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdna" class="modal-body">
							        <span id="titulodn"></span><br>
							        <span id="expdn"></span><br>
							        <span id="lpdn"></span><br>
							        <span id="lndn"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						
						<span id="resulimpressao">
							<button type="button" id="banj" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#anj">Anjo</button>
							<!-- Modal -->
							<div class="modal fade" id="anj" tabindex="-1" role="dialog" aria-labelledby="Anjo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Anjo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tanj" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Número Psíquico: </span>
						<span id="resulimpressao">
							<button type="button" id="bnpis" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#npis"></button>
							<!-- Modal -->
							<div class="modal fade" id="npis" tabindex="-1" role="dialog" aria-labelledby="Número Psíquico" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Número Psíquico</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tnpis" class="modal-body">
							        <span id="titulopsi"></span><br>
							        <span id="exppsi"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						
						<span id="licao"></span>

						<span id="result"></span><br>

						<span>Resposta Subconsciente: </span>
						<span id="resulimpressao">
							<button type="button" id="brsc" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#rsc"></button>
							<!-- Modal -->
							<div class="modal fade" id="rsc" tabindex="-1" role="dialog" aria-labelledby="Resposta Subconsciente" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Resposta Subconsciente</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="trsc" class="modal-body">
							        <span id="titulorsub"></span><br>
							        <span id="exprsub"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<span >Primeiro Ciclo: </span><span id="dn"></span><span> Até </span><span id="pc"></span>
						
						<span id="resulimpressao">
							<button type="button" id="bvpc" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#vpc"></button>
							<!-- Modal -->
							<div class="modal fade" id="vpc" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Vibração 1° Ciclo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tvpc" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bcl1"></span>
							<!-- Modal -->
							<div class="modal fade" id="cl1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tcl1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>
						
						<br>

						<span>Primeiro Desafio: De </span><span id="data"></span><span> até </span><span id="primc"></span>
						<span id="resulimpressao">
							<button type="button" id="bpd" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#pd"></button>
							<!-- Modal -->
							<div class="modal fade" id="pd" tabindex="-1" role="dialog" aria-labelledby="Primeiro Desafio" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Primeiro Desafio</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tpd" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddmd1"></span>
							<!-- Modal -->
							<div class="modal fade" id="ddmd1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddmd1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bdesdes1"></span>
							<!-- Modal -->
							<div class="modal fade" id="desdes1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdesdes1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddcl1"></span>
							<!-- Modal -->
							<div class="modal fade" id="ddcl1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddcl1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Primeiro Momento Decisivo: De </span><span id="datamd"></span><span> até </span><span id="primd"></span>
						<span id="resulimpressao">
							<button type="button" id="bpmd" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#pmd"></button>
							<!-- Modal -->
							<div class="modal fade" id="pmd" tabindex="-1" role="dialog" aria-labelledby="Primeiro Momento Decisivo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Primeiro Momento Decisivo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tpmd" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmomo1"></span>
							<!-- Modal -->
							<div class="modal fade" id="momo1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmomo1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoex1"></span>
							<!-- Modal -->
							<div class="modal fade" id="moex1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoex1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmodes1"></span>
							<!-- Modal -->
							<div class="modal fade" id="modes1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmodes1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoml1"></span>
							<!-- Modal -->
							<div class="modal fade" id="moml1" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoml1" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<span >Segundo Ciclo: </span><span id="sc"></span><span> Até </span><span id="scc"></span>

						<span id="resulimpressao">
							<button type="button" id="bvsc" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#vsc"></button>
							<!-- Modal -->
							<div class="modal fade" id="vsc" tabindex="-1" role="dialog" aria-labelledby="Vibração 2° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Vibração 2° Ciclo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tvsc" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bcl2"></span>
							<!-- Modal -->
							<div class="modal fade" id="cl2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tcl2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>
						
						
						<br>

						<span>Segundo Desafio: De </span><span id="datasde"></span><span> até </span><span id="prisde"></span>
						<span id="resulimpressao">
							<button type="button" id="bsd" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#sd"></button>
							<!-- Modal -->
							<div class="modal fade" id="sd" tabindex="-1" role="dialog" aria-labelledby="Segundo Desafio" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Segundo Desafio</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tsd" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddmd4">

							</span>
							<!-- Modal -->
							<div class="modal fade" id="bddmd45" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddmd4" class="modal-body">

							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddmd2"></span>
							<!-- Modal -->
							<div class="modal fade" id="ddmd2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddmd2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bdesdes2"></span>
							<!-- Modal -->
							<div class="modal fade" id="desdes2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdesdes2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddcl2"></span>
							<!-- Modal -->
							<div class="modal fade" id="ddcl2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddcl2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						

						<br>

						<span>Segundo Momento Decisivo: De </span><span id="datasd"></span><span> até </span><span id="prisd"></span>
						<span id="resulimpressao">
							<button type="button" id="bsmd" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#smd"></button>
							<!-- Modal -->
							<div class="modal fade" id="smd" tabindex="-1" role="dialog" aria-labelledby="Segundo Momento Decisivo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Segundo Momento Decisivo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tsmd" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmomo2"></span>
							<!-- Modal -->
							<div class="modal fade" id="momo2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmomo2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoex2"></span>
							<!-- Modal -->
							<div class="modal fade" id="moex2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoex2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmodes2"></span>
							<!-- Modal -->
							<div class="modal fade" id="modes2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmodes2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoml2"></span>
							<!-- Modal -->
							<div class="modal fade" id="moml2" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoml2" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<span>Terceiro Momento Decisivo: De </span><span id="datatd"></span><span> até </span><span id="pritd"></span>
						<span id="resulimpressao">
							<button type="button" id="btmd" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#tmd"></button>
							<!-- Modal -->
							<div class="modal fade" id="tmd" tabindex="-1" role="dialog" aria-labelledby="Terceiro Momento Decisivo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Terceiro Momento Decisivo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="ttmd" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmomo3"></span>
							<!-- Modal -->
							<div class="modal fade" id="momo3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmomo3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoex3"></span>
							<!-- Modal -->
							<div class="modal fade" id="moex3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoex3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmodes3"></span>
							<!-- Modal -->
							<div class="modal fade" id="modes3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmodes3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoml3"></span>
							<!-- Modal -->
							<div class="modal fade" id="moml3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoml3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<br><br>

						<span>Quarto Momento Decisivo: De </span><span id="dataqd"></span><span> até o final da vida.</span>
						<span id="resulimpressao">
							<button type="button" id="bqmd" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#qmd"></button>
							<!-- Modal -->
							<div class="modal fade" id="qmd" tabindex="-1" role="dialog" aria-labelledby="Quarto Momento Decisivo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Quarto Momento Decisivo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tqmd" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoml4"></span>
							<!-- Modal -->
							<div class="modal fade" id="moml4" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoml4" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmodes4"></span>
							<!-- Modal -->
							<div class="modal fade" id="modes4" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmodes4" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmoex4"></span>
							<!-- Modal -->
							<div class="modal fade" id="moex4" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmoex4" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bmomo4"></span>
							<!-- Modal -->
							<div class="modal fade" id="momo4" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmomo4" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<br><br>

						<span>Terceiro Ciclo: </span><span id="tc"></span><span> até o final da vida.</span>
						<span id="resulimpressao">
							<button type="button" id="bvtc" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#vtc"></button>
							<!-- Modal -->
							<div class="modal fade" id="vtc" tabindex="-1" role="dialog" aria-labelledby="Vibração 3° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Vibração 3° Ciclo</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tvtc" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bcl3"></span>
							<!-- Modal -->
							<div class="modal fade" id="cl3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tcl3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>
						
						<br>

						<span >Desafio Principal: </span><span id="dprincipal"></span><span> até o final da vida.</span>

						<span id="resulimpressao">
							<button type="button" id="bdpp" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#dpp"></button>
							<!-- Modal -->
							<div class="modal fade" id="dpp" tabindex="-1" role="dialog" aria-labelledby="Desafio Principal" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Desafio Principal</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdpp" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bdesdes3"></span>
							<!-- Modal -->
							<div class="modal fade" id="desdes3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdesdes3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddcl3"></span>
							<!-- Modal -->
							<div class="modal fade" id="ddcl3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddcl3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<span id="resulimpressao">
							<span id="bddm35"></span>
							<!-- Modal -->
							<div class="modal fade" id="bddmd3" tabindex="-1" role="dialog" aria-labelledby="Vibração 1° Ciclo" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des"></h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tddmd3" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span>

						<br><br>

						
					</div>

					<div id="segunda" class="col-6">
						<span>Ano Pessoal: </span>
						<span id="resulimpressao">
							<button type="button" id="banp" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#anp"></button>
							<!-- Modal -->
							<div class="modal fade" id="anp" tabindex="-1" role="dialog" aria-labelledby="Ano Pessoal" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Ano Pessoal</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tanp" class="modal-body">
							        <span id="tituloanp"></span><br>
							        <span id="expanp"></span><br>
							        <span id="dica">Dica:</span><br>
							        <span id="tenha"></span><br>
							        <span id="evite"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>

						<span>Mês Pessoal: </span>
						<span id="resulimpressao">
							<button type="button" id="bmp" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#mp"></button>
							<!-- Modal -->
							<div class="modal fade" id="mp" tabindex="-1" role="dialog" aria-labelledby="Mês Pessoal" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Mês Pessoal</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tmp" class="modal-body">
							        <span id="titulompe"></span><br>
							        <span id="expmpe"></span><br>
							        <span id="lampe"></span><br>
							        <span id="lpmpe"></span><br>
							        <span id="orimpe"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br>
						
						<span>Dia Pessoal: </span>
						<span id="resulimpressao">
							<button type="button" id="bdp" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#dp"></button>
							<!-- Modal -->
							<div class="modal fade" id="dp" tabindex="-1" role="dialog" aria-labelledby="Dia Pessoal" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Dia Pessoal</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tdp" class="modal-body">
							        <span id="titulodpe"></span><br>
							        <span id="lpdpe"></span><br>
							        <span id="ladpe"></span><br>
							        <span id="lppdpe"></span><br>
							        <span id="oridpe"></span><br>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<span>Dias Favoráveis: </span><span class="btn btn-sm btn-outline-primary" id="dfa"></span><br>
						<span>Cores Favoráveis: </span><span class="btn btn-sm btn-outline-primary" id="cfa"></span><br><br>
						<span>Números Harmônicos: </span><span class="btn btn-sm btn-outline-primary" id="nha"></span><br>
						<span>Números Neutros: </span><span class="btn btn-sm btn-outline-primary" id="nne"></span><br>
						<span>Números Desfavoráveis: </span><span class="btn btn-sm btn-outline-primary" id="nde"></span><br><br>

						<span>Harmonia Conjugal: </span>
									<span id="hc7"></span>
							        <span id="atrai"></span>
							        <span id="vibra"></span>
							        <span id="passivo"></span>
							        <span id="oposto"></span>
						<span id="resulimpressao">
							<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#hco">Ler+</button>
							<!-- Modal -->
							<div class="modal fade" id="hco" tabindex="-1" role="dialog" aria-labelledby="Harmonia Conjugal" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Harmonia Conjugal</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="thco" class="modal-body">
							        <span id="ehc"></span>
							        <span id="exphc"></span>
							        <span id="atrai2"></span>
							        <span id="vibra2"></span>
							        <span id="passivo2"></span>
							        <span id="oposto2"></span>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<div class="container" id="resultconjuge">
							<h5>Harmonia Conjugal</h5>
							<div class="row">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">Nome do Conjuge:</div>
										</div>
										<input id="conjuge" type="text" name="conjuge" class="form-control" pattern="[a-zA-Z\s]+$" required>
									</div>
							</div><br>
							<div class="row">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">Data de Nascimento:</div>
										</div>
										<input id="dataconjuge" type="date" name="dataconjuge" class="form-control" maxlength="10" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="2012-01-01" max="2014-02-18" required>
									</div>
								</div><br>
									<div class="row">
										<button class="btn btn-info" id="btnconjuge" onclick="conjuge()">Calcular</button>
									</div><br>
							<div class="row">
									<span>Harmonia Conjugal: <b></span><span id="missaoconjuge"></span></b>
							</div>
						</div><br>

						<span>Grau de Ascenção: </span>
						<span id="resulimpressao">
							<button type="button" id="bgrau" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#grau"></button>
							<!-- Modal -->
							<div class="modal fade" id="grau" tabindex="-1" role="dialog" aria-labelledby="Grau de Ascenção" aria-hidden="true">
							  <div class="modal-dialog modal-xl" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="des">Grau de Ascenção</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div id="tgrau" class="modal-body">
							        
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							      </div>
							    </div>
							  </div>
							</div>
						</span><br><br>

						<div id="triangulo"></div><br>
						<div>
							<button class="btn btn-warning" id="versao" value="basico" onclick="testeVocacionalBasico()">Teste Vocacional Básico</button>
							<button class="btn btn-secondary" id="versao" value="completo" onclick="testeVocacionalCompleto()">Teste Vocacional Completo</button>
						</div><br>

						
				</div>
			</div>
			</div><hr>

			<div class="container" id="profissao">
				<div class="row">
					<div class="col">
						<h5>Profissão Atual</h5>
						<input type="text" class="form-control" id="profAtual">
					</div>
					<div class="col">
						<h5>Profissão Pretendida</h5>
						<input type="text" class="form-control" id="profPret">
					</div>
				</div><hr>
			</div><br><br>
			
			<span id="ass"><h5>Acerto de Assinatura</h5></span>
			<div class="container bg" id="acertou">
				<div class="row">
					<div class="col">
						<div class="input-group mb-3">
						  <input style="text-align:center;font-size: 26;padding:5" type="text" id="acerto" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
						</div>
						<div id="resultnomeacerto"><br></div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<span>Nascimento: </span><span id="datacerto"></span><br>
						<span>Motivação: </span><span id="motacerto"></span>
						<span>Impressão: </span><span id="impacerto"></span>
						<span>Expressão: </span><span id="expacerto"></span><br>
						<button class="btn btn-secondary" id="teste" value="1" onclick="novoTesteVocacional1()">
						Exportar Novo Teste Vocacional
						</button>
					</div>
					<div class="col">
						<div id="trianguloacerto"><button class="btn btn-sm btn-primary" disabled>Triângulo da Vida</button></div>
						Periodo do Arcano: <span id="perini"></span> - <span id="periodofinal"></span><br>
					</div>
				</div>
			</div><br>
			<div class="container bg" id="acertou2">
				<div class="row">
					<div class="col">
						<div class="input-group mb-3">
						  <input style="text-align:center;font-size: 26;padding:5" type="text" id="acerto2" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
						</div>
						<div id="resultnomeacerto2"><br></div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<span>Nascimento: </span><span id="datacerto2"></span><br>
						<span>Motivação: </span><span id="motacerto2"></span>
						<span>Impressão: </span><span id="impacerto2"></span>
						<span>Expressão: </span><span id="expacerto2"></span><br>
						<button class="btn btn-secondary" id="teste" value="2" onclick="novoTesteVocacional2()">
						Exportar Novo Teste Vocacional
						</button>
					</div>
					<div class="col">
							<div id="trianguloacerto2"><button class="btn btn-sm btn-primary" disabled>Triângulo da Vida</button></div>
							Periodo do Arcano: <span id="perini2"></span> - <span id="periodofinal2"></span>
						</div>
				</div>
			</div>
			<hr>
			<span id="rubrica"><h5>Rúbrica</h5></span>
			<div class="container bg" id="acertou3">
				<div class="row">
					<div class="col">
						<div class="input-group mb-3">
						  <input style="text-align:center;font-size: 26;padding:5" type="text" id="acerto3" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<div class="col">
						<span>Nascimento: </span><span id="datacerto3"></span><br>
						<span>Motivação: </span><span id="motacerto3"></span>
						<span>Impressão: </span><span id="impacerto3"></span>
						<span>Expressão: </span><span id="expacerto3"></span><br><br>
						<div id="trianguloacerto3"><button class="btn btn-sm btn-primary" disabled>Triângulo da Vida</button></div><br>
					</div>
				</div>
			</div><br>

			<div class="container bg" id="acertou4">
				<div class="row">
					<div class="col">
						<div class="input-group mb-3">
						  <input style="text-align:center;font-size: 26;padding:5" type="text" id="acerto4" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
						</div>
					</div>
					<div class="col">
						<span>Nascimento: </span><span id="datacerto4"></span><br>
						<span>Motivação: </span><span id="motacerto4"></span>
						<span>Impressão: </span><span id="impacerto4"></span>
						<span>Expressão: </span><span id="expacerto4"></span><br><br>
						<div id="trianguloacerto4"><button class="btn btn-sm btn-primary" disabled>Triângulo da Vida</button></div><br>
					</div>
				</div>
			</div><br>
			<br><br>

			<div class="container" id="conc"><hr>
				<div class="row">
					<div class="form-group shadow-textarea">
					  <label for="conclusao"><h4>Conclusão</h4></label>
					  <textarea class="form-control" id="conclusao" cols="150" rows="10"></textarea>
					</div><hr>
				</div>
			</div><br>
			<button class="btn btn-success" id="salvar" style="display:none" disabled="disabled">Exportar</button>

			<span style="display: none">
				<span id="anopcalculo"></span><br>
							        <span id="anopessoal8"></span>
							        <span id="anopessoal9"></span>
							        <span id="anopessoal1"></span>
							        <span id="anopessoal2"></span>
							        <span id="anopessoal3"></span>
							        <span id="anopessoal4"></span>
							        <span id="anopessoal5"></span>
							        <span id="anopessoal6"></span>
							        <span id="anopessoal7"></span>
							        <span id="resultmes1"></span>
							        <span id="resultmes2"></span>
							        <span id="resultmes3"></span>
							        <span id="resultmes4"></span>
							        <span id="resultmes5"></span>
							        <span id="resultmes6"></span>
							        <span id="resultmes7"></span>
							        <span id="resultmes8"></span>
							        <span id="resultmes9"></span>
							        <span id="resultmes10"></span>
							        <span id="resultmes11"></span>
							        <span id="resultmes12"></span>
							        <span id="gdata"></span>
			</span><br><br>
							        
			
			<div class="col-sm" id="salvar" style="display:none">
					<input id="motivacao" name="motivacao" type="text">
					<input id="impressao" name="impressao" type="text">
					<input id="expressao" name="expressao" type="text">
					<input id="destino" name="destino" type="text">
					<input id="missao" name="missao" type="text">
					<input id="dianascimento" name="dianascimento" type="text">
					<input id="psiquico" name="psiquico" type="text">
					<input id="subconsciente" name="subconsciente" type="text">
					<input id="harmoniaconjugal" name="harmoniaconjugal" type="text">
					<input id="dividacarmica" name="dividacarmica" type="text">
					<input id="dividacarmicamot" name="dividacarmicamot" type="text">
					<input id="dividacarmicaexp" name="dividacarmicaexp" type="text">
					<input id="dividacarmicades" name="dividacarmicades" type="text">
					<input id="nharmonicos" name="nharmonicos" type="text">
					<input id="nneutros" name="nneutros" type="text">
					<input id="ndesfavoraveis" name="ndesfavoraveis" type="text">
					<input id="primeirociclo" name="primeirociclo" type="text">
					<input id="primeiromomentodecisivo" name="primeiromomentodecisivo" type="text">
					<input id="vprimeirociclo" name="vprimeirociclo" type="text">
					<input id="primeirodesafio" name="primeirodesafio" type="text">
					<input id="segundociclo" name="segundociclo" type="text">
					<input id="segundomomento" name="segundomomento" type="text">
					<input id="segundomomentodecisivo" name="segundomomentodecisivo" type="text">
					<input id="vsegundociclo" name="vsegundociclo" type="text">
					<input id="segundodesafio" name="segundodesafio" type="text">
					<input id="terceiromomento" name="terceiromomento" type="text">
					<input id="vterceirociclo" name="vterceirociclo" type="text">
					<input id="terceiromomentodecisivo" name="terceiromomentodecisivo" type="text">
					<input id="desafioprincipal" name="desafioprincipal" type="text">
					<input id="quartomomentodecisivo" name="quartomomentodecisivo" type="text">
					<input id="grau" name="grau" type="text">
			</div>

<?php require 'footer.php'; ?>