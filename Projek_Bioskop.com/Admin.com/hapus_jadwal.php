<?php

session_start();

if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

include('../service/database.php');


$id = $_GET['id'];

$query = "DELETE FROM jadwal WHERE id_jadwal = '$id'";

if($db->query($query)) {
    $_SESSION['alertdelete'] = true;
    header("location: Ekspor.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>