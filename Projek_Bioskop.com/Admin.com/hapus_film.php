<?php

if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

include('../service/database.php');


$id = $_GET['id'];

$query = "DELETE FROM film WHERE id = '$id'";

if($connection->query($query)) {
    $_SESSION['alertdelete'] = true;
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>