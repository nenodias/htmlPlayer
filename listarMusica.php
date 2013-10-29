<?php
	include("include/core/Includes.php");
	$json = json_decode( Leitor::lerArquivo("data/source.json") );
	sort($json);
	$busca = (isset($_GET["busca"])?$_GET["busca"]:'');
	JsonFiltros::filtrarJsonArtistaOuMusica($json,$busca);
	echo "<ul id=\"lista-musicas\" class=\"list-group\">";
	foreach($json as $x => $value ){
		echo "<li class=\"list-group-item\">";
		echo "<label for=\"musica[".$value->Id."]\">";
		echo $value->Artista." - ".$value->Musica."</label> ";
		echo "<button type=\"button\" data=\"".$value->Id."\" class=\"btn btn-default btn-sm playMusic\"><span class=\"glyphicon glyphicon-play\"></span></button>";
		echo "</li>";
	}
	echo "</ul>";
?>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".playMusic").on("click", function(){
			selecionaMusica($(this),true);
		});
	});
</script>;