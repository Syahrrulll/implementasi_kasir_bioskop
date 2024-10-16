<?php
session_start();
include 'service/database.php';
$hari = isset($_GET['day']) ? $_GET['day'] : 'senin';

$query = mysqli_query($db, "SELECT * FROM film INNER JOIN jadwal ON film.id = jadwal.id_film");


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
} else { 
$_SESSION['alertjadwal'] = true;
header("location: signin.php");

}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Bioskop Kebin</title>
    <link rel="stylesheet" href="css/style_jadwal.css">
</head>

<body>
    <header>
        <h1>JADWAL BIOSKOP KEBIN</h1>
    </header>

    <nav class="days-nav">
        <ul>
            <li><a href="jadwal.php?day=Senin">Senin</a></li>
            <li><a href="jadwal.php?day=Selasa">Selasa</a></li>
            <li><a href="jadwal.php?day=Rabu">Rabu</a></li>
            <li><a href="jadwal.php?day=Kamis">Kamis</a></li>
            <li><a href="jadwal.php?day=Jumat">Jumat</a></li>
            <li><a href="jadwal.php?day=Sabtu">Sabtu</a></li>
            <li><a href="jadwal.php?day=Minggu">Minggu</a></li>
        </ul>
    </nav>
    <div class="display-film"></div>
    <main class="schedule-grid">
        <div class="schedule-card">
            <?php
            while ($row = mysqli_fetch_array($query)) {
                if ($hari == $row['hari']) {
                    $filmId = $row['id_jadwal'];
                    ?>
                    <div class="film-item">
                        <a href="#modal-<?php echo $filmId; ?>">
                            <img src="image/<?php echo ltrim($row['poster']) ?>" alt="Poster" class="film-poster">
                        </a>
                        <p><?php echo "Waktu Mulai     : " . $row['jam_tayang'] ?></p>
                        <p><?php echo "Waktu Berakhir  : " . $row['jam_berakhir'] ?></p>
                    </div>

                    <div id="modal-<?php echo $filmId; ?>" class="modal">
                        <div class="modal-content">
                            <div class="poster">
                                <img src="image/<?php echo ltrim($row['poster']) ?>" alt="Poster">
                            </div>
                            <div class="details">
                                <h1><?php echo $row['judul'] ?></h1>
                                <h3>Sinopsis:</h3>
                                <p><?php echo $row['deskripsi'] ?></p>
                                <div class="info">
                                    <p><strong>Durasi:</strong> <?php echo $row['durasi'] ?> menit</p>
                                    <p><strong>Genre:</strong> <?php echo $row['genre'] ?></p>
                                    <p><strong>Harga:</strong> Rp.<?php echo $row['harga'] ?></p>
                                    <p><strong>Jam Mulai:</strong> <?php echo $row['jam_tayang'] ?></p>
                                    <p><strong>Jam Berakhir:</strong> <?php echo $row['jam_berakhir'] ?></p>
                                </div>
                                <a href="#" class="back-button">Kembali</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </main>

    <footer>
        <nav class="bottom-nav">
            <a href="./"><img src="image/Home.png" alt="Beranda"></a>
            <a href=""><img src="image/jadwal_icon.png" alt="Jadwal"></a>
        </nav>
    </footer>
</body>

</html>
