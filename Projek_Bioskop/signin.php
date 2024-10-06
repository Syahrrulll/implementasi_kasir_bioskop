<?php

    include 'service/database.php';

    if(isset($_POST['signin'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE 
        username='$username' AND password='$password' ";

        $result = $db->query($sql);

        if($result->num_rows > 0){

            header('location: beranda.php');
        }
        else{
            echo "Akun tidak ada";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scle=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="background"></div>
        
        <div class="form-box">
            <form action='signin.php' method='POST'>
                <input type='text' placeholder='username' name='username'>
                <input type='password' placeholder='password' name='password'>
                <button type='submit' name='signin'>Masuk</button> 
            </form>

            </div>
</body>
</html>