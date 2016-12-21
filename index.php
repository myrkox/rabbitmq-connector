<?php

require_once 'vendor/autoload.php';

define('HOST', '35.156.213.249');
define('PORT', 5672);
define('USER', 'prestigenews');
define('PASS', 'prestigenews');
define('VHOST', 'prestigenews');

use PhpAmqpLib\Connection\AMQPStreamConnection;

$connection = new AMQPStreamConnection(HOST, PORT, USER, PASS, VHOST);
$channel = $connection->channel();

die(var_dump($connection->isConnected()));
