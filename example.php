<?php
/*
*
* @ Package: Iowis - Query Builder Class
* @ Author: Stf Kolev / <inkyzfx@gmail.com
* @ URL: https://github.com/stfkolev/Iowis
* @ Licence: The MIT License (MIT) - Copyright (c) - http://opensource.org/licenses/MIT
*
*/

require 'vendor/autoload.php';

// database config
$config = [
	'host'      => 'localhost',
	'driver'    => 'mysql',
	'database'  => 'test',
	'username'  => 'root',
	'password'  => '',
	'charset'   => 'utf8',
	'collation' => 'utf8_general_ci',
	'prefix'    => ''
];

// start Iowis
$db = new \Iowis\Iowis($config);

// Select Records
$records = $db->table('pages')
		->where('age', '>', 18)
		->orderBy('id', 'desc')
		->limit(10)
		->getAll();

var_dump($records);
