<?php
session_start();
if(!isset($_SESSION['login'])) {
	header("Location: login.php?r=restrito");
	exit;
}
require 'conecta.php';

if(isset($_POST['date']) && !empty($_POST['date'])) {

	$id_user = $_SESSION['login'];
	$nome = addslashes($_POST['nome']);
	$date = addslashes($_POST['date']);
	$motivacao = addslashes($_POST['motivacao']);
	$impressao = addslashes($_POST['impressao']);
	$expressao = addslashes($_POST['expressao']);
	$destino = addslashes($_POST['destino']);
	$missao = addslashes($_POST['missao']);
	$dianascimento = addslashes($_POST['dianascimento']);
	$psiquico = addslashes($_POST['psiquico']);
	$subconsciente = addslashes($_POST['subconsciente']);
	$harmoniaconjugal = addslashes($_POST['harmoniaconjugal']);
	$dividacarmica = addslashes($_POST['dividacarmica']);
	$dividacarmicamot = addslashes($_POST['dividacarmicamot']);
	$dividacarmicaexp = addslashes($_POST['dividacarmicaexp']);
	$dividacarmicades = addslashes($_POST['dividacarmicades']);
	$nharmonicos = addslashes($_POST['nharmonicos']);
	$nneutros = addslashes($_POST['nneutros']);
	$ndesfavoraveis = addslashes($_POST['ndesfavoraveis']);
	$primeirociclo = addslashes($_POST['primeirociclo']);
	$primeiromomentodecisivo = addslashes($_POST['primeiromomentodecisivo']);
	$vprimeirociclo = addslashes($_POST['vprimeirociclo']);
	$primeirodesafio = addslashes($_POST['primeirodesafio']);
	$segundociclo = addslashes($_POST['segundociclo']);
	$segundomomento = addslashes($_POST['segundomomento']);
	$segundomomentodecisivo = addslashes($_POST['segundomomentodecisivo']);
	$vsegundociclo = addslashes($_POST['vsegundociclo']);
	$segundodesafio = addslashes($_POST['segundodesafio']);
	$terceiromomento = addslashes($_POST['terceiromomento']);
	$vterceirociclo = addslashes($_POST['vterceirociclo']);
	$terceiromomentodecisivo = addslashes($_POST['terceiromomentodecisivo']);
	$desafioprincipal = addslashes($_POST['desafioprincipal']);
	$quartomomentodecisivo = addslashes($_POST['quartomomentodecisivo']);
	$grau = addslashes($_POST['grau']);

	$sql = "INSERT INTO salvos SET id_user = :id_user, nome = :nome, data = :data, motivacao = :motivacao, impressao = :impressao, expressao = :expressao, destino = :destino, missao = :missao, dianascimento = :dianascimento, psiquico = :psiquico, subconsciente = :subconsciente, harmoniaconjugal = :harmoniaconjugal, dividacarmica = :dividacarmica, dividacarmicamot = :dividacarmicamot, dividacarmicaexp = :dividacarmicaexp, dividacarmicades = :dividacarmicades, nharmonicos = :nharmonicos, nneutros = :nneutros, ndesfavoraveis = :ndesfavoraveis, primeirociclo = :primeirociclo, primeiromomentodecisivo = :primeiromomentodecisivo, vprimeirociclo = :vprimeirociclo, primeirodesafio = :primeirodesafio, segundociclo = :segundociclo, segundomomento = :segundomomento, segundomomentodecisivo = :segundomomentodecisivo, vsegundociclo = :vsegundociclo, segundodesafio = :segundodesafio, terceiromomento = :terceiromomento, vterceirociclo = :vterceirociclo, terceiromomentodecisivo = :terceiromomentodecisivo, desafioprincipal = :desafioprincipal, quartomomentodecisivo = :quartomomentodecisivo, grau = :grau";
		$sql = $pdo->prepare($sql);

		$sql->bindValue(":id_user", $id_user);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":data", $date);
		$sql->bindValue(":motivacao", $motivacao);
		$sql->bindValue(":impressao", $impressao);
		$sql->bindValue(":expressao", $expressao);
		$sql->bindValue(":destino", $destino);
		$sql->bindValue(":missao", $missao);
		$sql->bindValue(":dianascimento", $dianascimento);
		$sql->bindValue(":psiquico", $psiquico);
		$sql->bindValue(":subconsciente", $subconsciente);
		$sql->bindValue(":harmoniaconjugal", $harmoniaconjugal);
		$sql->bindValue(":dividacarmica", $dividacarmica);
		$sql->bindValue(":dividacarmicamot", $dividacarmicamot);
		$sql->bindValue(":dividacarmicaexp", $dividacarmicaexp);
		$sql->bindValue(":dividacarmicades", $dividacarmicades);
		$sql->bindValue(":nharmonicos", $nharmonicos);
		$sql->bindValue(":nneutros", $nneutros);
		$sql->bindValue(":ndesfavoraveis", $ndesfavoraveis);
		$sql->bindValue(":primeirociclo", $primeirociclo);
		$sql->bindValue(":primeiromomentodecisivo", $primeiromomentodecisivo);
		$sql->bindValue(":vprimeirociclo", $vprimeirociclo);
		$sql->bindValue(":primeirodesafio", $primeirodesafio);
		$sql->bindValue(":segundociclo", $segundociclo);
		$sql->bindValue(":segundomomento", $segundomomento);
		$sql->bindValue(":segundomomentodecisivo", $segundomomentodecisivo);
		$sql->bindValue(":vsegundociclo", $vsegundociclo);
		$sql->bindValue(":segundodesafio", $segundodesafio);
		$sql->bindValue(":terceiromomento", $terceiromomento);
		$sql->bindValue(":vterceirociclo", $vterceirociclo);
		$sql->bindValue(":terceiromomentodecisivo", $terceiromomentodecisivo);
		$sql->bindValue(":desafioprincipal", $desafioprincipal);
		$sql->bindValue(":quartomomentodecisivo", $quartomomentodecisivo);
		$sql->bindValue(":grau", $grau);
		$sql->execute();



} else {
	echo "<script language=javascript>alert( 'Alerta Vermelho!' );</script>";
}

?>