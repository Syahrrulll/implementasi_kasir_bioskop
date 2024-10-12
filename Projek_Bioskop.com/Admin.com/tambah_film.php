<?php

if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
      /* Styling card shadow and hover animation */
      .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
      }
      .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      }
      
      /* Button animation */
      .btn {
        transition: all 0.3s ease-in-out;
      }
      .btn:hover {
        transform: scale(1.05);
      }

      /* Header background color */
      .card-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        text-align: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
      }

      .btn-success {
        background-color: #28a745;
        border: none;
      }
      .btn-warning {
        background-color: #ffc107;
        border: none;
      }


      .form-group label {
        font-weight: bold;
      }


      .container {
        animation: fadeIn 1s ease-in;
      }
      @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
      }
    </style>
    <title>Tambah Film</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              <i class="fas fa-film"></i> TAMBAH FILM
            </div>
            <div class="card-body">
              <form enctype="multipart/form-data" method="POST" action="simpan_film.php">
                
                <div class="form-group">
                  <label><i class="fas fa-edit"></i> JUDUL FILM</label>
                  <input type="text" name="judul" placeholder="Masukkan Judul Film" class="form-control" required>
                </div>

                <div class="form-group">
                  <label><i class="fas fa-tags"></i> GENRE FILM</label>
                  <input type="text" name="genre" placeholder="Masukkan Genre Film" class="form-control" required>
                </div>

                <div class="form-group">
                  <label><i class="fas fa-clock"></i> DURASI FILM (menit)</label>
                  <input type="number" name="durasi" placeholder="Masukkan Durasi Film" class="form-control" required>
                </div>

                <div class="form-group">
                  <label><i class="fas fa-image"></i> POSTER FILM</label>
                  <input type="file" name="poster" class="form-control-file" required>
                </div>

                <div class="form-group">
                  <label><i class="fas fa-align-left"></i> DESKRIPSI FILM</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Film" rows="4" required></textarea>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> SIMPAN</button>
                  <button type="reset" class="btn btn-warning"><i class="fas fa-undo"></i> RESET</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
