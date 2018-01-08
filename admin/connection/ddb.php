<?php

	define('BANCO', $_SERVER['REMOTE_ADDR']);

	if (BANCO == '127.0.0.1'){
			
		$h = 'localhost';
		$u = 'root';
		$p = 'local12$';
		$d = 'moow';
			
	}else{

		$h = 'localhost';
		$u = 'root';
		$p = '';
		$d = 'moow';		
	}

	define("S_HOST", 	$h);
	define("S_USER", 	$u);
	define("S_PASS", 	$p);
	define("S_DB", 		$d);