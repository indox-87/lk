<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function debug($str) {
	echo '<pre>';
	var_dump($str);
	echo '</pre>';
	exit;
}

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 0);
ini_set('log_errors','on');
ini_set('error_log', __DIR__ . '/main_error.log');
