<?php
define('APP_ROOT', dirname(__DIR__));
define('APP_ENV', getenv('APPLICATION_ENV'));
if(file_exists(APP_ROOT . '/env/'.APP_ENV.'.php')){
	require APP_ROOT . '/env/'.APP_ENV.'.php';
}else{
	require APP_ROOT . '/env/sny-dev.php';
}
$table_prefix  = 'predictor_';

if ( !defined('ABSPATH') )
	define('ABSPATH', APP_ROOT . '/public/');

/** Sets up vars and included files. */
require_once(ABSPATH . 'settings.php');