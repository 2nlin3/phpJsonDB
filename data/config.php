<?php

if(!defined('MY_APP')) exit;

@date_default_timezone_set('Europe/Moscow');
@error_reporting(E_ALL &~ E_DEPRECATED);
@ini_set('display_errors', 1);
setlocale(LC_ALL, 'en_US.utf8');

return [
	'seo'		=> 0,
	'home'		=> 'index',
	'fn'		=> '/',
	'language'	=> 'RU',
];
