<?php


include('service/database.php');

$id = $_GET['id'];

$query = mysqli_query($db, "SELECT * FROM film
INNER JOIN jadwal ON film.id = jadwal.id_film WHERE id = $id LIMIT 1");

$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <link rel="stylesheet" href="css/style_deskripsi.css">
</head>
<body>
    <div class="container">
        <h1>Daftar Film</h1>
        <label for="modal-toggle">
            <img src="thumbnail.jpg" alt="Thumbnail Film" class="thumbnail"> <!-- Ganti 'thumbnail.jpg' dengan gambar yang sesuai -->
        </label>
        
        <!-- Modal -->
        <input type="checkbox" id="modal-toggle" class="modal-toggle">
        <div class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span> 
                <div class="poster"></div>
                <div class="details">
                    <h1>Judul Pilem..</h1>
                    <p>Deskripsi</p>
                    <div class="info">
                        <p><strong>Durasi:</strong> 120 menit</p>
                        <p><strong>Genre:</strong> Aksi, Petualangan</p>
                    </div>
                    <div class="harga">
                        <p><strong>Harga Tiket:</strong> Rp 50.000</p>
                    </div>
                </div>
                <a href="daftar_film.php" class="back-button">Kembali</a>
            </div>
    </div>
</body>
</html>