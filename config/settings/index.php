<?php

	// Move post e get para array separada
	$post = $_POST;
	$get = $_GET;

	// Config page default
	if (array_key_exists('page', $get)) { $get['page'] = 'home'; }
	if (!array_key_exists('page', $get)) { $get['page'] = 'home'; }

	# # # Configuração dos caminho
	include 'settings.routes.php';
	include 'settings.functions.php';
?>
