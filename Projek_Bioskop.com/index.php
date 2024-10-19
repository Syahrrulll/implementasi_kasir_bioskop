<?php
session_start();


$_SESSION['admin'] = false;

$hostname = 'localhost';
$username = 'root';
$password = '';

$database_name = 'bioskop';

$db = new mysqli($hostname, $username, $password);

if ($db->connect_error) {
    echo "<p class='error'>Koneksi gagal: " . $db->connect_error . "</p>";
} else {

    $dbCheckQuery = "SHOW DATABASES LIKE '$database_name'";
    $result = $db->query($dbCheckQuery);
        if ($result->num_rows == 1) {
            $query = "DROP DATABASE bioskop;";
            if($db->query($query)) {}   else{}
        }else{}

    

    $dbCheckQuery = "SHOW DATABASES LIKE '$database_name'";
    $result = $db->query($dbCheckQuery);

    if ($result->num_rows == 0) {
        $createDbQuery = "CREATE DATABASE $dbName";
        if ($db->query($createDbQuery) === TRUE) {} else {}} else {}
    $db = mysqli_connect($hostname, $username, $password, $dbName   );
    $backup_file = 'Admin.com/db/bioskop.sql';
    $sql = file_get_contents($backup_file);


    $sql = str_replace('utf8mb4_0900_ai_ci', 'utf8mb4_unicode_ci', $sql);


    $queries = explode(';', $sql);


    foreach ($queries as $query) {
        $query = trim($query);

        if (!empty($query)) {

            if (stripos($query, 'CREATE TABLE') === 0) {
                if (stripos($query, 'IF NOT EXISTS') === false) {
                    $query = preg_replace('/^CREATE TABLE/i', 'CREATE TABLE IF NOT EXISTS', $query);
                }else{}

                if (preg_match('/CREATE TABLE IF NOT EXISTS `?(\w+)`?/i', $query, $matches)) {
                    $table_name = $matches[1];
                    $check_table = $db->query("SHOW TABLES LIKE '$table_name'");
                    if ($check_table->num_rows === 0) {
                        if ($db->query($query) === TRUE) {} else {}} else {}

                    
                }else{}
            } else {
                $query = preg_replace('/^INSERT INTO/i', 'INSERT IGNORE INTO', $query);
                if ($db->query($query) === TRUE) {} else {}
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_beranda.css">
    <title>Selamat Datang di Bioskop</title>
</head>

<body>
    <div class="container">

        <div class="bg" style="
         position: fixed;
         top: 0;
         left: 0;
         width: 100vw;
         height: 100vh;
         background-image: url('image/bg.png');
         background-size: cover;
         background-position: center;
         opacity: 0.2;
         z-index: -1;
         filter : grayscale(1);
         "></div>



        <div class="kepala"></div>
        <div class="bg_header" style="
             background-image: url('image/header.png');
             background-size: cover;
             z-index: 0;"></div>


        <div class="welcome">
            SELAMAT DATANG DI WEB KEBIN
        </div>
        <div class="description">Nikmati Film Favoritmu, Pesan Tiket dengan Mudah dan Cepat!</div>
        <div class="batas_header">
            </div>
        </div>
    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

        include 'layout/logout.html';
    } else {
        include 'layout/guest.html';
    }

    if (isset($_SESSION['alert']) && $_SESSION['alert'] == true) {
        echo '<script>alert("Berhasil Masuk")</script>';
        $_SESSION['alert'] = false;
    } else if (isset($_SESSION['alertadmin']) && $_SESSION['alertadmin'] == true) {
        echo '<script>alert("Anda Bukan Admin")</script>';
        $_SESSION['alertadmin'] = false;
    }
    ?>

    <div class="caption">Dapatkan tiket film favoritmu kapan saja, di mana saja, bebas antri dan dijamin aman!</div>

    <div class="component1">
        <div class="image">
            <img src="image/slide_1.png" alt="Slide 1">
            <img src="image/slide_2.png" alt="Slide 2">
            <img src="image/slide_3.png" alt="Slide 3">
        </div>
    </div>




    <img src="image/KEBINpng.png" class="watermark-kebin" alt="Watermark Kebin">


    </div>

    <div class="horizontal-scroll">
        <div class="Daftar_Film">
        <?php 
                  include('service/database.php');
                  $no = 1;
                  $query = mysqli_query($db,"SELECT * FROM film");
                  while($row = mysqli_fetch_array($query)){
                ?>

            <div class="Item"><img src="image/<?php echo ltrim($row['poster'])?>"></div>
            <?php }?>
        </div>
    </div>


    <footer>
        <nav class="bottom-nav">
            <a href="./"><img src="image/Home.png" alt="Beranda"></a>
            <a href="jadwal.php?day=Senin"><img src="image/jadwal_icon.png" alt="Jadwal"></a>
        </nav>
    </footer>
</body>

</html>