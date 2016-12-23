<?php
	# # caminho basico
	$settings['proj'] = '/vg/controle-de-professores/'; // pasta atual do projeto
	$settings['root'] = 'http://'.$_SERVER['SERVER_NAME'].$settings['proj']; // Configura seleção do servidor mais pasta local

	# # CONFIGURA DIRETÓRIOS # #
	$settings['routes']['dir']['vendor'] = $settings['root'].'vendor/'; // Configura seleção do servidor mais pasta local
	$settings['routes']['dir']['vendor-scripts'] = $settings['routes']['dir']['vendor'].'scripts/'; // Configura local dos frameworks scripts
	$settings['routes']['dir']['vendor-bootstrap'] = $settings['routes']['dir']['vendor'].'bootstrap/'; // Configura local dos frameworks scripts
	$settings['routes']['dir']['vendor-fontawesome'] = $settings['routes']['dir']['vendor'].'FontAwesome/'; // Configura local dos frameworks scripts
	
	$settings['routes']['dir']['script'] = $settings['root'].'scripts/'; // Scripts do aplicativo
	$settings['routes']['dir']['style'] = $settings['root'].'style/'; // Scripts do aplicativo
	# # # # # # # # # # # # # # #


	// # # CONFIGURA DIRETÓRIOS # #
	$settings['routes']['file']['jquery'] = $settings['routes']['dir']['vendor-scripts'].'jquery.min.js'; 
	$settings['routes']['file']['coffee'] = $settings['routes']['dir']['vendor-scripts'].'coffee-script.js'; 
	$settings['routes']['file']['less'] = $settings['routes']['dir']['vendor-scripts'].'less.min.js'; 

	$settings['routes']['file']['bootstrap-css'] = $settings['routes']['dir']['vendor-bootstrap'].'bootstrap.min.css'; 
	$settings['routes']['file']['bootstrap-js'] = $settings['routes']['dir']['vendor-bootstrap'].'bootstrap.min.js'; 

	$settings['routes']['file']['fontawesome'] = $settings['routes']['dir']['vendor-fontawesome'].'font-awesome.min.css'; 
	// # # # # # # # # # # # # # # #
?>
