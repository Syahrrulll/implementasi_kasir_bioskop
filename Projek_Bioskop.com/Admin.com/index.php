<?php

session_start();

if(isset($_SESSION['admin']) and $_SESSION['admin'] == true){
    echo '<script>alert("Berhasil Masuk Sebagai Admin")</script>';
}
else {
    $_SESSION ['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
</head>
<body>
    Halo admin
</body>
</html>