<?php 
  
  if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
  } else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

  include('../service/database.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM film WHERE id = $id LIMIT 1";

  $result = mysqli_query($db, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Film</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT FILM
            </div>
            <div class="card-body">
              <form action="update_film.php" method="POST">
                
                <div class="form-group">
                  <label>JUDUL</label>
                  <input type="text" name="judul" value="<?php echo $row['judul'] ?>" placeholder="Masukkan Judul Film" class="form-control”>
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <div class="form-group">
                  <label>GENRE</label>
                  <input type="text" name="genre" value="<?php echo $row['genre'] ?>" placeholder="Masukkan Genre Film" class="form-control">
                </div>
                
                <div class="form-group">
                  <label>DURASI</label>
                  <input type="text" name="durasi" value="<?php echo $row['durasi'] ?>" placeholder="Masukkan Durasi Film" class="form-control">
                </div>

                <div class="form-group">
                  <label>POSTER FILM</label>
                  <input type="file" name="poster" value="<?php echo $row['poster'] ?>" class="form-control-file" required>
                </div>

                <div class="form-group">
                  <label>DESKRIPSI</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Film" rows="4"><?php echo $row['deskripsi'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>