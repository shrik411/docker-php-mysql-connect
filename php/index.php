<?php

$host = 'db';
$user = 'devuser';
$pass = 'devpass';
$db = 'information_schema';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Connection failed".$conn->connect_error;
}

echo "Successfully connected to MYSQL"


?>