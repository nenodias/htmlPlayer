<form>
<div class="painel">
	<button id="selecionarTudo" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-check"></span></button>
	<button id="tocarTodas" type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-play"></span></button>
	<button id="voltar" type="button" class="btn btn-default btn-sm pull-right"><span class="glyphicon glyphicon-arrow-left"></span></button>
</div>
<hr/>
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
		echo "<input type=\"checkbox\" name=\"musica[".$value->Id."]\" value=\"".$value->Id."\" /> ";
		echo $value->Artista." - ".$value->Musica."</label> ";
		echo "<button type=\"button\" class=\"btn btn-default btn-sm playMusic\"><span class=\"glyphicon glyphicon-play\"></span></button>";
		echo "</li>";
	}
	echo "</ul>";
?>
	<script type="text/javascript">
	$(document).ready(function(){
		$("li").on("dblclick",function(){
			var $check = $(this).find(":checkbox");
			$check.click();
		});
		$("#selecionarTudo").on("click", function(){
			var $checks = $(":checkbox");
			$checks.each(function(){
				selecionaMusica($(this));
			});

		});
		$(".playMusic").on("click", function(){
			var $check = $(this).closest("li").find("input");
			$check.attr("checked","checked");
			ListaMusicas.add($check.val());
			_indexMusica = ListaMusicas.index;
			atualizaPlayer(true);
		});
	});
	</script>;
</form>