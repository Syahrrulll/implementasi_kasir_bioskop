<?php

session_start();

if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
    if (isset($_SESSION['alertadmin']) && $_SESSION['alertadmin'] == true) {
        $_SESSION['alertadmin'] = false;
        echo '<script>alert("Berhasil Masuk Sebagai Admin")</script>';
    }
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

if (isset($_SESSION['sync']) and $_SESSION['sync'] == true){
    include "../service/database.php";
    $conn = new mysqli($hostname, $username, $password, $database_name);

    if ($conn->connect_error) {
    } else {
        $backup_file = 'db/bioskop.sql';
        $sql = file_get_contents($backup_file);

        
        $sql = str_replace('utf8mb4_0900_ai_ci', 'utf8mb4_unicode_ci', $sql);
        
        
        $queries = explode(';', $sql);
        
       
        foreach ($queries as $query) {
            $query = trim($query);
        
            if (!empty($query)) {
              
                if (stripos($query, 'CREATE TABLE') === 0) {
                    if (stripos($query, 'IF NOT EXISTS') === false) {
                        $query = preg_replace('/^CREATE TABLE/i', 'CREATE TABLE IF NOT EXISTS', $query);
                    }
        
                    if (preg_match('/CREATE TABLE IF NOT EXISTS `?(\w+)`?/i', $query, $matches)) {
                        $table_name = $matches[1];
                        $check_table = $conn->query("SHOW TABLES LIKE '$table_name'");
                        if ($check_table->num_rows === 0) {
                        }
                    }
                } else {
                    $query = preg_replace('/^INSERT INTO/i', 'INSERT IGNORE INTO', $query);
                }
            }
        }
        
    }
        echo '<script>alert("Berhasil Sinkronisasi Data")</script>';
        $_SESSION['sync'] = false;
}


if (isset($_SESSION['alertupdate']) and $_SESSION['alertupdate'] == true) {
    $_SESSION['alertupdate'] = false;
    echo '<script>alert("Berhasil Update Data")</script>';
} else if (isset($_SESSION['alertsave']) and $_SESSION['alertsave'] == true) {
    $_SESSION['alertsave'] = false;
    echo '<script>alert("Berhasil Menyimpan Data")</script>';
} else if (isset($_SESSION['alertdelete']) and $_SESSION['alertdelete'] == true) {
    $_SESSION['alertdelete'] = false;
    echo '<script>alert("Berhasil Menghapus Data")</script>';
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
            position: relative;
            overflow: hidden;
        }

        .header {
            text-align: center;
            padding: 20px;
        }

        .header h1 {
            margin: 0;
            color: #333;
            font-size: 2.5em;
            animation: fadeIn 1s ease-in forwards;
        }

        .nav {
            display: flex;
            justify-content: center;
            margin: 20px 0;
            animation: slideInFromLeft 0.7s ease-out;
        }

        .nav a {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 12px 24px;
            border-radius: 6px;
            margin: 0 10px;
            transition: background 0.3s, transform 0.3s;
        }

        .nav a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
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
            animation: bounce 1.5s ease infinite;
        }

        /* Animasi zoom-in untuk judul */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes bounce {
            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Elemen dekoratif */
        .decorative-ornament {
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(0, 123, 255, 0.1);
            border-radius: 50%;
            animation: float 4s infinite ease-in-out;
            z-index: -1; /* Di belakang konten */
        }

        .decorative-ornament:nth-child(1) {
            top: -50px;
            left: 10%;
            animation-delay: 0s;
        }

        .decorative-ornament:nth-child(2) {
            bottom: -50px;
            right: 15%;
            animation-delay: 1s;
        }

        .decorative-ornament:nth-child(3) {
            top: 30%;
            left: 60%;
            animation-delay: 2s;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
                opacity: 0.5;
            }

            50% {
                transform: translateY(-20px);
                opacity: 1;
            }

            100% {
                transform: translateY(0);
                opacity: 0.5;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Admin Page</h1>
        </div>
        <div class="nav">
            <a href="tambah_film.php">Tambah Film</a>
            <a href="daftar_film.php">Daftar Film</a>
            <a href="daftar_user.php">Daftar Pengguna</a>
            <a href="impor.php">Impor Database</a>
            <a href="../logout.php">Keluar</a>
        </div>
        <div class="content">
            <p class="welcome-icon">🎬</p>
            <p>Selamat datang di halaman Admin! Kelola data film dan users di sini.</p>
        </div>

        <!-- Elemen dekoratif -->
        <div class="decorative-ornament"></div>
        <div class="decorative-ornament"></div>
        <div class="decorative-ornament"></div>
    </div>
</body>

</html>
