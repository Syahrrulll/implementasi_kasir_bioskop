<?php

include ("../service/database.php");

$judulfilm = $_POST['judul'];
$durasifilm = $_POST['durasi'];
$genrefilm = $_POST['genre'];
$deskripsifilm = $_POST['deskripsi'];

$file_name = $_FILES['poster']['name'];
$tempname = $_FILES['poster']['tmp_name'];
$folder = '../image/' .$file_name;

$query = "INSERT INTO film (judul, durasi, genre, poster, deskripsi) VALUES ('$judulfilm', '$durasifilm', '$genrefilm',' $file_name', '$deskripsifilm')";

if(move_uploaded_file($tempname, $folder)){
    echo "<h2>File Berhasil Di Upload<h2>";
}
else{
    echo "<h2>File Gagal Di Upload <h2>";
}

if($db->query($query)) {

    header("location: ../Admin.com");

} else {


    echo "Data Gagal Disimpan!";

}

?>