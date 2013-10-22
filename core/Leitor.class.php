<?php 
class Leitor{
	
	private static $texto = 1;
	
	public static function lerArquivo($arquivoNome){
		return file_get_contents($arquivoNome);
	}
}
?>
