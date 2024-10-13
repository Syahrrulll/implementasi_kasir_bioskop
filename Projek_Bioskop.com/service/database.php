<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'bioskop';

$db =  mysqli_connect($hostname, $username, $password);

$check_db = $db->query("SHOW DATABASES LIKE '$database_name'");

if ($check_db->num_rows == 0) {

    if ($db->query("CREATE DATABASE $database_name") === TRUE) {
        echo "<p class='success'>Database $database_name berhasil dibuat.</p>";
    } else {
        echo "<p class= 'error'>Error membuat database: " . $conn->error . "</p>";
    }
}

$db = mysqli_connect($hostname, $username, $password, $database_name);

if ($db->connect_error) {
    die("error!");
}
