<?php
require __DIR__.'/../vendor/autoload.php';

use Yarscript\Ciloquent\Database\MySQLi\Connection;
use Yarscript\Ciloquent\Model;
$config = [
    'DSN'      => "",
    'hostname' => "localhost",
    'username' => "root",
    'password' => "toor",
    'database' => "teletick4",
    'DBDriver' => "MySQLi",
    'DBPrefix' => "",
    'pConnect' => false,
    'DBDebug'  => true,
    'charset'  => "utf8",
    'DBCollat' => "utf8_general_ci",
    'swapPre'  => "",
    'encrypt'  => false,
    'compress' => false,
    'strictOn' => false,
    'failover' => [0],
    'port'     => '3306',
];
$db = new Connection($config);

$model = new \Yarscript\Ciloquent\Model($db);

$test = true;
