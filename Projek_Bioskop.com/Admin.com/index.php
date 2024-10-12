<?php

session_start();

if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
    echo '<script>alert("Berhasil Masuk Sebagai Admin")</script>';
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-radius: 12px;
            margin-top: 50px;
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            margin: 0;
            color: #333;
            font-size: 2.5em;
        }
        .nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        .nav a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 12px 24px;
            border-radius: 6px;
            margin: 0 10px;
            transition: background 0.3s;
        }
        .nav a:hover {
            background-color: #0056b3;
        }
        .content {
            text-align: center;
            margin-top: 20px;
        }
        .content p {
            font-size: 1.2em;
            color: #555;
        }
        .content .welcome-icon {
            font-size: 4em;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Admin Panel</h1>
        </div>
        <div class="nav">
            <a href="tambah_film.php">Tambah Film</a>
            <a href="daftar_film.php">Daftar Film</a>
            <a href="../logout.php">Keluar</a>
        </div>
        <div class="content">
            <p class="welcome-icon">🎬</p>
            <p>Selamat datang di halaman Admin! Kelola data film, dan lainnya di sini.</p>
        </div>
    </div>
</body>
</html>