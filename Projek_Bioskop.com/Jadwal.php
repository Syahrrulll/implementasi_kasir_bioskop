<?php
session_start();
include 'service/database.php';
$hari = isset($_GET['day']) ? $_GET['day'] : 'senin';

$query = mysqli_query($db, "SELECT * FROM film INNER JOIN jadwal ON film.id = jadwal.id_film");

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
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        include 'layout/logout.html';
    } else {
        include 'layout/guest.html';
    }
    ?>
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

    <main class="schedule-grid">
        <div class="schedule-card">

            <?php
    while ($row = mysqli_fetch_array($query)){
        if($hari == $row['hari']){?>
            <img src="image/<?php echo ltrim($row['poster'])?>" alt="Poster">;
            <?php }
    } ?>
    </div>
    </main>

    <footer>
        <nav class="bottom-nav">
            <a href="#"><img src="home_icon.png" alt="Beranda"></a>
            <a href="#"><img src="calendar_icon.png" alt="Kalender"></a>
        </nav>
    </footer>
</body>
</html>
