<form method="post" action="tocarLista.php">
<div class="painel">
	<button id="selecionarTudo" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-check"></span></button>
	<button id="tocar" type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-play"></span></button>
	<button id="voltar" type="button" class="btn btn-default btn-sm pull-right"><span class="glyphicon glyphicon-arrow-left"></span></button>
</div>
<hr/>
<?php
	include("core/Includes.php");
	$json = json_decode( Leitor::lerArquivo("source.json") );
	sort($json);
	$busca = $_GET["busca"];
	JsonFiltros::filtrarJsonArtistaOuMusica($json,$busca);
	echo "<ul id=\"lista-musicas\" class=\"list-group\">";
	foreach($json as $x => $value ){
		echo "<li class=\"list-group-item\">";
		echo "<label for=\"musica[".$value->Id."]\">";
		echo "<input type=\"checkbox\" name=\"musica[".$value->Id."]\" value=\"".$value->MP3."\" /> ";
		echo $value->Musica."</label>";
		echo "</li>";
	}
	echo "</ul>";
?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("li").on("click",function(){
			$(this).find(":checkbox").click();
		});
		$("#selecionarTudo").on("click", function(){
			$(":checkbox").click();
		});
	});
	</script>;
</form>