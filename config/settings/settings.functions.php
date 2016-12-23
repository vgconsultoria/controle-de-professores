<?php 

	function print_routes ($path_nome_geral_do_caminho) {
		$caminho = null;
		$temp = array('dir', 'file');
		for ($i=0; $i < 2; $i++) { 

			# # Seleciona se é tipo diretorio ou arquivo
			if (array_key_exists($path_nome_geral_do_caminho, $GLOBALS['settings']['routes'][$temp[$i]])) {
				$caminho = $GLOBALS['settings']['routes'][$temp[$i]][$path_nome_geral_do_caminho];
			};
		}
		unset($i, $temp);

		if 	($caminho == null) { $caminho = 'path-null;'; }

		echo $caminho;
		return $caminho;
	}
	// echo print_routes('bootstrap-css');
?>
