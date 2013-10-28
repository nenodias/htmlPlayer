<?php
class JsonFiltros{
	public static function filtrarJsonId(&$ObjetoJson, $Criterio){
		$lista = $ObjetoJson;
		$ObjetoJson = array();
		foreach($lista as $indice => $valor ){
			if($Criterio == $valor->Id){
				array_push($ObjetoJson, $lista[$indice]);
				break;
			}
		}
	}

	public static function filtrarJsonArtista(&$ObjetoJson, $Criterio){
		$lista = $ObjetoJson;
		$ObjetoJson = array();
		foreach($lista as $indice => $valor ){
			if(preg_match("/".$Criterio."/i", $valor->Artista)){
				array_push($ObjetoJson, $lista[$indice]);
			}
		}
	}

	public static function filtrarJsonMusica(&$ObjetoJson, $Criterio){
		$lista = $ObjetoJson;
		$ObjetoJson = array();
		foreach($lista as $indice => $valor ){
			if(preg_match("/".$Criterio."/i", $valor->Musica)){
				array_push($ObjetoJson, $lista[$indice]);
			}
		}
	}

	public static function filtrarJsonArtistaOuMusica(&$ObjetoJson, $Criterio){
		$lista = $ObjetoJson;
		$ObjetoJson = array();
		foreach($lista as $indice => $valor ){
			if(preg_match("/".$Criterio."/i", $valor->Musica)||preg_match("/".$Criterio."/i", $valor->Artista)){
				array_push($ObjetoJson, $lista[$indice]);
			}
		}
	}
}
?>
