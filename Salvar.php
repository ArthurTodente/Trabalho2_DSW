<?php

$nome = $_POST['txtNome'];
$Instrumento = $_POST['txtInstrumento'];
$Música = $_POST['txtMusica'];

include "clsConexao.php";

if( isset( $_REQUEST['inserir']) ){
	$query = "INSERT INFO Main_Code (Nome) VALUES ( '$Nome' )";
	Conexao::executar( $query );
	header("Location: Main_Code.php");
}
if( isset( $_REQUEST['inserir']) ){
	$query = "INSERT INFO Main_Code (Instrumento) VALUES ( '$Instrumento' )";
	Conexao::executar( $query );
	header("Location: Main_Code.php");
}
if( isset( $_REQUEST['inserir']) ){
	$query = "INSERT INFO Main_Code (Música) VALUES ( '$Música' )";
	Conexao::executar( $query );
	header("Location: Main_Code.php");
}