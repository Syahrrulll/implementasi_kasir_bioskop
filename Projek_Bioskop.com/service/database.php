<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'bioskop';

$db =  mysqli_connect($hostname, $username, $password);

$check_db = $db->query("SHOW DATABASES LIKE '$database_name'");

$create_users_table = "CREATE TABLE IF NOT EXISTS users (
                id INT PRIMARY KEY AUTO_INCREMENT,
                nama VARCHAR(255) UNIQUE,
                password VARCHAR(255),
                current_add DATE DEFAULT CURRENT_TIMESTAMP
            )";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    die("error!");
}
