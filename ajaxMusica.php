<?php 
	include("include/core/Includes.php");
	$id = $_GET["id"];
	$json = json_decode( Leitor::lerArquivo("data/source.json") );
	sort($json);
	JsonFiltros::filtrarJsonId($json,$id);
	echo json_encode($json);
	
?>