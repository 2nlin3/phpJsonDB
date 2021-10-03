<?php

return [

	'' => [
		'controller' => 'page',
		'action' => 'index',
	],

	'\?page=login' => [
		'controller' => 'page',
		'action' => 'login',
	],

	'\?page=index(.*)' => [
		'controller' => 'page',
		'action' => 'index',
	],

	'\?ajax=register&action=new' => [
		'controller' => 'ajax',
		'action' => 'register',
	],

	'\?page=registerSuccess(.*)' => [
		'controller' => 'page',
		'action' => 'registerSuccess',
	],

	'\?page=register(.*)' => [
		'controller' => 'page',
		'action' => 'register',
	],

	'\?ajax=validator(.*)' => [
		'controller' => 'ajax',
		'action' => 'validator',
	],

	'\?ajax=login&checked' => [
		'controller' => 'ajax',
		'action' => 'loginChecked',
	],

	'\?ajax=logout' => [
		'controller' => 'ajax',
		'action' => 'logout',
	],

	'\?page=login(.*)' => [
		'controller' => 'page',
		'action' => 'login',
	],

	'\?page=ucp(.*)' => [
		'controller' => 'page',
		'action' => 'ucp',
	],

	'\?page=error(.*)' => [
		'controller' => 'page',
		'action' => 'error',
	],
];