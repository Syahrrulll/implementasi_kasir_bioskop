<?php
session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

session_start();
include "../service/database.php";

$file_name = $_FILES['poster']['name'];
$tempname = $_FILES['poster']['tmp_name'];
$folder = '../image/' .$file_name;

$judulfilm = $_POST['judul'];
$durasifilm = $_POST['durasi'];
$genrefilm = $_POST['genre'];
$hargatiket = $_POST['harga'];
$deskripsifilm = $_POST['deskripsi'];

$query = "UPDATE film SET judul = '$judulfilm', genre = '$genrefilm', durasi = '$durasi_film', deskripsi = '$deskripsifilm', harga '$hargatiket',poster = '$file_name', WHERE id = '$id'";

if($connection->query($query)) {
    $_SESSION['alertupdate'] == true;
    header("location: Ekspor.php");
} else {

    echo "Data Gagal Diupate!";
}

?>