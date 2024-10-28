<?php

    include 'service/database.php';
    session_start();
    if(isset($_POST['signin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE 
        username='$username' AND password='$password' ";

        $result = $db->query($sql);

        if($_POST['username'] == "Admin" && $_POST['password'] == "pass123"){
            $_SESSION['alertadmin'] = true;
            $_SESSION['admin'] = true;
            $_SESSION['sync'] = true;
            header('location: ./Admin.com');  
        }

        else if ($result->num_rows > 0){
            $_SESSION['loggedin'] = true;
            $_SESSION['alert'] = true;
            header('location: ../Projek_Bioskop.com');
        }

        else{
            echo '<script>alert("Akun Tidak Ada")</script>';
        }

        
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scle=1.0">
        <link rel="stylesheet" href="css/style_sign.css">
        <title>Sign In</title>
    </head>
    <body>
        <?php
        if(isset($_SESSION['alertjadwal']) and $_SESSION['alertjadwal'] == true){
            echo '<script>alert("HARAP MASUK TERLEBIH DAHULU UNTUK MELIHAT JADWAL")</script>';
            $_SESSION['alertjadwal'] = false;
        
        }?>
    <div class="backgroun-sign" style ="
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    background-image: url('image/icha.jpg');
    background-size: cover;
    background-position: center;
    opacity: 0.2;
    z-index: -1;
    filter : grayscale(1);
    "></div>

    <div class="box-login">
    </div>
    <div class="border-sign">
    </div>
    <div class="sign">
        Sign In
    </div>



    <form action="signin.php" method="POST">
        <div class="input-username">
            <input type="text" placeholder="Username" name="username">
        </div>
            
        <div class="border-password">
            <input type='password' placeholder='Password' name='password'> 
        </div>

        <div class="kirim">
            <button type="submit" name="signin">Masuk</button>
        </div>
        <div class="caption-signin">
            Belum punya akun? silakan
        </div>
        <div class="daftar">
            <a href="signup.php">daftar</a>
        </div>
    </form>
</body>
</html>