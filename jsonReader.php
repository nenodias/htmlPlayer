<?php
	include("include/core/Includes.php");
	$json = json_decode( Leitor::lerArquivo("data/source.json") );
	sort($json);
	JsonFiltros::filtrarJsonArtistaOuMusica($json,"Terra de Gigantes");
	foreach($json as $x => $value ){
		echo $value->Musica."<br/>";
		echo $value->Artista."<br/><br/>";
		echo "<br/>".Leitor::lerArquivo($value->TXT)."<br/>";
		//echo "<audio id=\"audio-player\" controls source loop src=\"".$value->MP3."\">Your browser does not support the audio element.</audio>";
		?><script type="text/javascript">
			var musica = "<?php echo $value->MP3; ?>";
			var tituloMusica = "<?php echo $value->Artista." - ".$value->Musica; ?>";
		</script><?php
	}
?>