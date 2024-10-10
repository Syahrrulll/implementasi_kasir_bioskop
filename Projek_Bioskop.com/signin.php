<?php

    include 'service/database.php';
    session_start();
    if(isset($_POST['signin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE 
        username='$username' AND password='$password' ";

        $result = $db->query($sql);

        if($result->num_rows > 0){
            $_SESSION['loggedin'] = true;
            
            header('location: ../Projek_Bioskop.com');
        }

        else if($_POST['username'] == "Admin" && $_POST['password'] == "pass123"){
            $_SESSION['admin'] = true;
            header('location: admin.php');
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


    <div class="box-login">
    </div>
    <div class="border-sign">
    </div>
    <div class="sign-in">
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