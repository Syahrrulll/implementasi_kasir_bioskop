<?php
session_start();
include 'service/database.php'
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
     
         
     
         <div class="kepala">

             <div class="bg_header" style ="
             background-image: url('image/header.png');
             background-size: cover;
             z-index: 0;"></div>


             <div class="welcome">
                 SELAMAT DATANG DI WEB KEBIN
             </div>
             <div class="description">Film Favoritmu, Pesan Tiket dengan Mudah dan Cepat!</div>
             <div class="batas_header"></div>
         </div>
     
     <?php   
     if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
     
         include 'layout/logout.html';
     }
     else{
         include 'layout/guest.html';
     }
     
     if ($_SESSION['alert'] == true){
         echo '<script>alert("Berhasil Masuk")</script>';
         $_SESSION['alert'] = false;
     }else if ($_SESSION['alertadmin'] == true){
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
                   <div class="Item"><img src="image/frame1.png"></div>
                   <div class="Item"><img src="image/Frame2.png"></div>
                   <div class="Item"><img src="image/frame3.png"></div>
                   <div class="Item"><img src="image/frame4.png"></div>
                   <div class="Item"><img src="image/frame5.jpg"></div>   
                   <div class="Item"><img src="image/frame6.jpg"></div>
                   <div class="Item"><img src="image/frame7.jpeg"></div>
               </div>
        </div>
        <div class="navbar">        
            <a href="../Projek_Bioskop.com">
                <img src="image/Home.png" class="home_logo">
            </a>
        </div>

</body>
</html>
