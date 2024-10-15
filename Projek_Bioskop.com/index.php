<?php
session_start();
include 'service/database.php';

$_SESSION['admin'] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_beranda.css">
    <title>Selamat Datang di Bioskop</title>
</head>

<body>
    <div class="container">

        <div class="bg" style="
         position: fixed;
         top: 0;
         left: 0;
         width: 100vw;
         height: 100vh;
         background-image: url('image/bg.png');
         background-size: cover;
         background-position: center;
         opacity: 0.2;
         z-index: -1;
         filter : grayscale(1);
         "></div>



        <div class="kepala"></div>
        <div class="bg_header" style="
             background-image: url('image/header.png');
             background-size: cover;
             z-index: 0;"></div>


        <div class="welcome">
            SELAMAT DATANG DI WEB KEBIN
        </div>
        <div class="description">Nikmati Film Favoritmu, Pesan Tiket dengan Mudah dan Cepat!</div>
        <div class="batas_header">
            </div>
        </div>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        include 'layout/logout.html';
    } else {
        include 'layout/guest.html';
    }

    if (isset($_SESSION['alert']) && $_SESSION['alert'] == true) {
        echo '<script>alert("Berhasil Masuk")</script>';
        $_SESSION['alert'] = false;
    } else if (isset($_SESSION['alertadmin']) && $_SESSION['alertadmin'] == true) {
        echo '<script>alert("Anda Bukan Admin")</script>';
        $_SESSION['alertadmin'] = false;
    }
    ?>

    <div class="caption">Dapatkan tiket film favoritmu kapan saja, di mana saja, bebas antri dan dijamin aman!</div>

    <div class="component1">
        <div class="image">
            <img src="image/slide_1.png" alt="Slide 1">
            <img src="image/slide_2.png" alt="Slide 2">
            <img src="image/slide_3.png" alt="Slide 3">
        </div>
    </div>




    <img src="image/KEBINpng.png" class="watermark-kebin" alt="Watermark Kebin">


    </div>

    <div class="horizontal-scroll">
        <div class="Daftar_Film">
        <?php 
                  include('service/database.php');
                  $no = 1;
                  $query = mysqli_query($db,"SELECT * FROM film");
                  while($row = mysqli_fetch_array($query)){
                ?>

            <div class="Item"><<img src="image/<?php echo ltrim($row['poster'])?>"></div>
            <?php }?>
        </div>
    </div>


    <footer>
        <nav class="bottom-nav">
            <a href="./"><img src="image/Home.png" alt="Beranda"></a>
            <a href="jadwal.php?day=Senin"><img src="image/jadwal_icon.png" alt="Jadwal"></a>
        </nav>
    </footer>
</body>

</html>