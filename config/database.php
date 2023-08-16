<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'B');
define('DB_PASS', '12345');
define('DB_NAME', 'php');

// Create connection : 

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check the connection :

if ($connection->connect_error) {
    die('Connection Failed' . $connection->connect_error);
}
