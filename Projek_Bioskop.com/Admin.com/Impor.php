<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Impor Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 20px;
            overflow: hidden;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: slideIn 0.5s ease-out;
        }
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .success {
            color: #4CAF50;
            font-weight: bold;
            animation: fadeIn 0.5s ease-in-out;
        }
        .error {
            color: #F44336;
            font-weight: bold;
            animation: fadeIn 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .message {
            margin-top: 20px;
        }
        .button-container {
            margin-top: 20px;
        }
        .button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        .bubble {
            position: absolute;
            width: 40px;
            height: 40px;
            background-color: rgba(0, 123, 255, 0.2);
            border-radius: 50%;
            animation: float 5s infinite ease-in-out;
        }
        .bubble:nth-child(1) {
            left: 20%;
            animation-delay: 0s;
        }
        .bubble:nth-child(2) {
            left: 40%;
            animation-delay: 1s;
        }
        .bubble:nth-child(3) {
            left: 60%;
            animation-delay: 2s;
        }
        .bubble:nth-child(4) {
            left: 80%;
            animation-delay: 3s;
        }
        @keyframes float {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.8;
            }
            50% {
                transform: translateY(-20px) scale(1.2);
                opacity: 1;
            }
            100% {
                transform: translateY(0) scale(1);
                opacity: 0.8;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hasil Impor Data</h1>
    <div class="message">
        <?php
        include "../service/database.php";
        $conn = new mysqli($hostname, $username, $password, $database_name);

        if ($conn->connect_error) {
            echo "<p class='error'>Koneksi gagal: " . $conn->connect_error . "</p>";
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
                                if ($conn->query($query) === TRUE) {
                                    echo "<p class='success'>Tabel $table_name berhasil dibuat.</p>";
                                } else {
                                    echo "<p class='error'>Error membuat tabel $table_name: " . $conn->error . "</p>";
                                }
                            } else {
                                echo "<p class='error'>Tabel $table_name sudah ada, lewati pembuatan tabel.</p>";
                            }
                        }
                    } else {
                        $query = preg_replace('/^INSERT INTO/i', 'INSERT IGNORE INTO', $query);
                        if ($conn->query($query) === TRUE) {
                            echo "<p class='success'>Data berhasil dimasukkan.</p>";
                        } else {
                            echo "<p class='error'>Error memasukkan data: " . $conn->error . "</p>";
                        }
                    }
                }
            }
            
        }

        ?>
    </div>
    <div class="button-container">
        <a href="index.php" class="button">Kembali ke Awal</a>
    </div>
</div>

<div class="bubble" style="top: 10%;"></div>
<div class="bubble" style="top: 30%;"></div>
<div class="bubble" style="top: 50%;"></div>
<div class="bubble" style="top: 70%;"></div>

</body>
</html>
