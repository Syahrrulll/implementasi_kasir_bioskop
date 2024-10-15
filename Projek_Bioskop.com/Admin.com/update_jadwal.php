<?php
session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

include "../service/database.php";

$id = $_POST['id'];

$hari = $_POST['nama_hari'];
$id_film = $_POST['id_film'];
$jam_mulai = $_POST['jam_mulai'];
$jam_berakhir = $_POST['jam_berakhir'];
$query = "UPDATE jadwal SET hari = '$hari', id_film = '$id_film', jam_tayang = '$jam_mulai', jam_berakhir = '$jam_berakhir' WHERE id_jadwal = '$id'";

if($db->query($query)) {
    $_SESSION['alertupdate'] == true;
    header("location: Ekspor.php");
} else {

    echo "Data Gagal Diupate!";
}

?>