<?php

    include 'service/database.php';

    if(isset($_POST['signup'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users (username, password) VAlUES
        ('$username', '$password')";

        if($db->query($sql)){
        }
        else{

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="background"></div>
        
        <div class="form-box">
            <form action='signup.php' method='POST'>
                <input type='text' placeholder='username' name='username'>
                <input type='password' placeholder='password' name='password'>
                <button type='submit' name='signup'>Daftar</button> 
            </form>

            </div>
</body>

<style>
    body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    font-family: Arial, sans-serif;
}

.container {
    position: relative;
    width: 1440px;
    height: 1024px;
    background: #799CBF;
}

/* Kotak Form */
.form-box {
    position: absolute;
    width: 676px;
    height: 478px;
    left: 382px;
    top: 240px;
    background: rgba(217, 217, 217, 0.68);
    border-radius: 39px;
}

</style>
</html>
