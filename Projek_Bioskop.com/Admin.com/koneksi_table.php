<?php
$host = 'localhost'; 
$username = 'root'; 
$password = '';
$dbname = 'bioskop';

try {
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $query = $conn->query("SHOW DATABASES LIKE '$dbname'");
    if ($query->rowCount() == 0) {
        $conn->exec("CREATE DATABASE $dbname");
        echo "<script>alert('Database \"$dbname\" berhasil dibuat.');</script>";
    } else {
        echo "<script>alert('Database \"$dbname\" sudah ada.');</script>";
    }

    $conn->exec("USE $dbname");

    $query = $conn->query("SHOW TABLES LIKE 'film'");
    if ($query->rowCount() == 0) {
        $sql = "CREATE TABLE film (
            id INT AUTO_INCREMENT PRIMARY KEY,
            judul VARCHAR(100) NOT NULL,
            genre VARCHAR(50) NOT NULL,
            deskripsi TEXT,
            durasi TIME,
            poster VARCHAR(255)
        )";

        $conn->exec($sql);
        echo "<script>alert('Tabel \"film\" berhasil dibuat.');</script>";
    } else {

        echo "<script>alert('Tabel \"film\" sudah ada.');</script>";
    }

} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}


$conn = null;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .menu {
            text-align: center;
            margin: 20px 0;
        }
        .menu a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .menu a:hover {
            background-color: #0056b3;
        }
        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Panel Bioskop</h1>
        <div class="menu">
            <a href="index.php">Kembali</a>
        </div>
        <div class="message">
            <?php
            if (isset($dbname)) {
                echo "Database: <strong>$dbname</strong> siap digunakan.<br>";
            }
            ?>
        </div>
    </div>
</body>
</html>
