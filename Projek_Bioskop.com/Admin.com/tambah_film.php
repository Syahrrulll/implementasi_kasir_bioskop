<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Film</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH FILM
            </div>
            <div class="card-body">
              <form enctype="multipart/form-data" method="POST" action="simpan_film.php">
                
                <div class="form-group">
                  <label>JUDUL FILM</label>
                  <input type="text" name="judul" placeholder="Masukkan Judul Film" class="form-control">
                </div>

                <div class="form-group">
                  <label>GENRE FILM</label>
                  <input type="text" name="genre" placeholder="Masukkan Genre Film" class="form-control">
                </div>

                <div class="form-group">
                  <label>DURASI FILM</label>
                  <input type="text" name="durasi" placeholder="Masukkan Durasi Film" class="form-control">
                </div>

                <div class="form-group">
                  <label>POSTER FILM</label>
                  <input type="file" name="poster" class="form-control">
                </div>

                <div class="form-group">
                  <label>DESKRIPSI FILM</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Masukkan Deskripsi Film" rows="4"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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