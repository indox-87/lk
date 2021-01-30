<?php

return [
	// MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'addtasks' => [
		'controller' => 'main',
		'action' => 'addtasks',
	],
	'edittasks' => [
		'controller' => 'main',
		'action' => 'edittasks',
	],
	'formtasks' => [
		'controller' => 'main',
		'action' => 'formtasks',
	],
	'sorttasks' => [
		'controller' => 'main',
		'action' => 'sorttasks',
	],
	'edit/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'edit',
	],
	// AccountController
	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
	'account/logout' => [
		'controller' => 'account',
		'action' => 'logout',
	],

];