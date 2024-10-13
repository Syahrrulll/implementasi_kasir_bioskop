<?php
session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

include "../service/database.php";



$backup_file = 'db/bioskop.sql';


$file = fopen($backup_file, 'w');


$tables = $db->query("SHOW TABLES");
while ($table = $tables->fetch_row()) {
    $table_name = $table[0];

 
    $result = $db->query("SHOW CREATE TABLE $table_name");
    $row = $result->fetch_row();
    fwrite($file, $row[1] . ";\n\n");


    $data = $db->query("SELECT * FROM $table_name");
    while ($row = $data->fetch_assoc()) {
        $values = array();
        foreach ($row as $value) {
            $values[] = "'" . $db->real_escape_string($value) . "'";
        }
        fwrite($file, "INSERT INTO $table_name VALUES (" . implode(",", $values) . ");\n");
    }
    fwrite($file, "\n\n");
}

fclose($file);
header("location: ./");
?>