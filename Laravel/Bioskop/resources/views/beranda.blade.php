<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Beranda - Web Bioskop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            padding: 10px;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #575757;
        }

        .navbar button {
           margin-left : 80px ;
        }
        .container {
            padding: 20px;
        }
        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }
        .movie-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .movie-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 200px;
            margin: 10px;
            overflow: hidden;
        }
        .movie-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
        .movie-details {
            padding: 10px;
        }
        .movie-details h3 {
            margin: 10px 0 5px 0;
            font-size: 18px;
        }
        .movie-details p {
            margin: 0;
            font-size: 14px;
            color: #555;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <a href="beranda.php">Beranda</a>
    <a href="jadwal.php">Jadwal</a>
    <a href="kontak.php">Kontak</a>

</div>

</div class = "tombol-logout">
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Logout</button>
</form>


<!-- Konten Utama -->
<div class="container">
    <div class="welcome">
        <h1>Selamat Datang di Web Bioskop</h1>
        <p>Hai,! Lihat film yang sedang tayang di bioskop kami.</p>
    </div>

    <!-- Daftar Film -->
    <div class="movie-grid">
            <div class="movie-card">
                <a href="pembayaran.php?title=">
                    <img src="images/" alt="">
                </a>
                <div class="movie-details">
                    <h3>Title</h3>
                    <p>Genre:</p>
                    <p>Durasi:</p>
                </div>
            </div>

    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 Web Bioskop. All rights reserved.</p>
</div>

</body>
</html>
