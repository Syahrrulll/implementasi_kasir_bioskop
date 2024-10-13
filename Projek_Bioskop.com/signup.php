<?php

    include 'service/database.php';

    $sign_message = '';
    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VAlUES
        ('$username', '$password')";

        if($db->query($sql)){
            echo '<script> alert("Daftar Akun Berhasil, Silahkan Login")</script>';
        }else{

            echo '<script> alert("Daftar Akun Gagal, Coba Lagi")</script>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_sign.css">
    <title>Sign Up</title>
</head>
<body>
<div class="box-login">
    </div>
    <div class="backgroun-sign" style ="
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-image: url('image/Background_login.jpg');
    background-size: cover;
    background-position: center;
    opacity: 0.2;
    z-index: -1;
    filter : grayscale(1);
    "></div>
    <div class="border-sign">
    </div>
    <div class="sign">
        Sign Up
    </div>

    <form action="signup.php" method="POST">
        <div class="input-username">
            <input type="text" placeholder="Username" name="username">
        </div>
            
        <div class="border-password">
            <input type='password' placeholder='Password' name='password'> 
        </div>

        <div class="kirim">
            <button type="submit" name="signup">Daftar</button>
        </div>
    </form>
        <div class="caption-signin">
            Sudah punya akun? silakan
        </div>
        <div class="daftar">
            <a href="signin.php" name="signup">masuk</a>
        </div>

        <div class="lewati">
            Lewati
        </div>
        <div class='skip'>
            <a href="../Projek_Bioskop.com">
                <img src ="image/lewati.png">
            </a>
        </div>
</body>
</html>
