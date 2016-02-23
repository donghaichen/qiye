<?php



	define('LUSER_START',microtime(true));

	require __DIR__.'/../app/routes.php';
	
	Session::_init();

	$app = new Application();
	
	$app->bindInstallPaths(require __DIR__.'/paths.php');

	return $app;
