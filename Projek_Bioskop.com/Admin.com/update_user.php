<?php
session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

session_start();
include "../service/database.php";


$userbios = $_POST['username'];
$passwordbios = $_POST['password'];
$query = "UPDATE users SET username = '$userbios', password '$passwordbios', WHERE id = '$id'";

if($connection->query($query)) {
    $_SESSION['alertupdate'] == true;
    header("location: Ekspor.php");
} else {

    echo "Data Gagal Diupate!";
}

?>