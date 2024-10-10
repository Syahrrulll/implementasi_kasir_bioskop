<?php
session_start();
include 'service/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_beranda.css">
    <title>Selamat Datang di Bioskop</title>
</head>
<body>

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

    
    <div class="kepala">
        <div class="bg_header"><img src="image/header.png"></div>
        <div class="welcome">
            SELAMAT DATANG DI WEB KEBIN
        </div>
        <div class="description">Film Favoritmu, Pesan Tiket dengan Mudah dan Cepat!</div>
        <div class="batas_header"></div>
    </div>

    <div class="caption">Dapatkan tiket film favoritmu kapan saja, di mana saja, bebas antri dan dijamin aman!</div>

    <?php   
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        include 'layout/logout.html';
    }
    else{
        include 'layout/guest.html';
    }
    ?>
    
    <div class="component1">
        <div class="slides">
            <span id="slide-1"></span>
            <span id="slide-2"></span>
            <span id="slide-3"></span>
            <div class="image">
                <img src="image/slide_1.png" alt="Slide 1">
                <img src="image/slide_2.png" alt="Slide 2">
                <img src="image/slide_3.png" alt="Slide 3">
            </div>
        </div>

        <div class="navigates">
            <a href="#slide-1">1</a>
            <a href="#slide-2">2</a>
            <a href="#slide-3">3</a>
        </div>
    </div>
    <div class="scroll">
        <div class="Daftar_Film">
            <div class="Item"><img src="image/frame1.png"></div>
            <div class="Item"><img src="image/Frame2.png"></div>
            <div class="Item"><img src="image/frame3.png"></div>
        </div>
    </div>

    <div class="navbar">
        <div class="home_logo">
            <a href="beranda.php">
                <img src="image/Home.png">
            </a>
        </div>
    </div>
    <img src="image/KEBINpng.png" class="watermark-kebin" alt="Watermark Kebin">
</body>
</html>
