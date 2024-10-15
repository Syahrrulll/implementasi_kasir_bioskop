<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
    <link rel="stylesheet" href="css/style_jadwal.css">
</head>
<body>
    <header>
        <h1>JADWAL</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Senin</a></li>
            <li><a href="#">Selasa</a></li>
            <li><a href="#">Rabu</a></li>
            <li><a href="#">Kamis</a></li>
            <li><a href="#">Jumat</a></li>
            <li><a href="#">Sabtu</a></li>
            <li><a href="#">Minggu</a></li>
        </ul>
    </nav>
    <main>
        <div class="movie-grid">
            <?php

            include "service/database.php";

            $sql = "SELECT * FROM film";
            $result = $db->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="movie-poster">';
                    echo '<img src="image/' . ltrim($row['poster']) . '" alt="Poster Film">';
                    echo '</div>';
                }
            } else {
                echo "No movies found.";
            }

            // Close connection
            $db->close();
            ?>
        </div>
    </main>
    <footer>
        <div class="footer-icons">
            <a href="#"><img src="calendar-icon.png" alt="Calendar"></a>
            <a href="#"><img src="home-icon.png" alt="Home"></a>
        </div>
    </footer>
</body>
</html>
