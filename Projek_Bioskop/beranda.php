<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Bioskop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1 class="welcome">SELAMAT DATANG DI BIOSKOP</h1>
        </div>
        
        <a href="signup.php" class="signup-btn">Sign Up</a>
        <a href="signin.php" class="signin-btn">Sign In</a>
        <!-- Main Image -->
        <div class="main-image">
            <img src="KEBIN-removebg-preview.png" alt="Main Image">
        </div>

        <!-- Rectangle Section -->
        <div class="rectangle"></div>

        <!-- Movie Thumbnails -->
        <div class="movie-gallery">
            <div class="movie" style="background-image: url('Coffee Please.jpg');"></div>
            <div class="movie" style="background-image: url('popo.jpg');"></div>
            <div class="movie" style="background-image: url('Planet Arcadia.jpg');"></div>
            <div class="movie" style="background-image: url('Planet Arcadia.jpg');"></div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="home">Home</div>
            <div class="schedule">Jadwal</div>
            <div class="logout">Logout</div>
        </div>
    </div>
</body>
<style>
    body {
    background: #F5F5F5;
    font-family: 'Bree Serif', sans-serif;
}

.container {
    position: relative;
    width: 1000px;
    height: 800px;
    margin: 0 auto;
}

.header {
    position: relative;
    width: 100%;
    height: 96px;
    text-align: center;
    margin-top: 33px;
}

.welcome {
    font-size: 71px;
    line-height: 96px;
    color: #000000;
}

.signup-btn, .signin-btn {
    position: absolute;
    background: #D9D9D9;
    border-radius: 24px;
    width: 103px;
    height: 41px;
    text-align: center;
    line-height: 41px;
    font-size: 13px;
    margin-right : 90%;
}

.signup-btn {
    right: 145px;
    top: 41px;
}

.signin-btn {
    right: 145px;
    top: 84px;
}

.main-image img {
    position: absolute;
    width: 385px;
    height: 353px;
    left: -78px;
    top: -96px;
}

.rectangle {
    position: absolute;
    width: 1000px;
    height: 500px;
    left: 113px;
    top: 205px;
    background: #D9D9D9;
    border-radius: 37px;
}

.movie-gallery {
    position: absolute;
    width: 1189px;
    height: 459px;
    left: 126px;
    top: 869px;
    display: flex;
    overflow-x: auto;
}

.movie {
    width: 270px;
    height: 459px;
    background-size: cover;
    border-radius: 21px;
    margin-right: 20px;
}

.footer {
    position: absolute;
    width: 1421px;
    height: 159px;
    left: 0px;
    top: 1467px;
    background: #799CBF;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.home, .schedule, .logout {
    font-size: 32px;
    color: #000000;
}

</style>
</html>

