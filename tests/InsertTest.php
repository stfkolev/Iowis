<?php 

require 'vendor/autoload.php';

$config = [
    'host'      => 'localhost',
    'driver'    => 'mysql',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'     => ''
];

$db = new \Iowis\Builder($config);

$data = [
	'name' => 'Stf',
	'surname' => 'Kolev',
	'age' => '24',
	'country' => 'Bulgaria',
	'city' => 'Varna',
	'status' => 1
];

$query = $db->table('users')->insert($data);

if($query)
{
	echo 'Record added! <br />' . 
		 'InsertID: ' . $db->insertId();
}