<?php
session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}
include ("../service/database.php");

$hari = $_POST['nama_hari'];
$id_film = $_POST['id_film'];
$jammulai = $_POST['jam_mulai'];
$jamberakhir = $_POST['jam_berakhir'];


$query = "INSERT INTO jadwal (id_film , jam_tayang, jam_berakhir, hari) VALUES  ('$id_film', '$jammulai', '$jamberakhir' ,'$hari')";

if($db->query($query)) {
    $_SESSION['alertsave'] = true;
    header("location: Ekspor.php");

} else {


    echo "Data Gagal Disimpan!";

}

?>