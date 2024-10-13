<?php

session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
  $_SESSION['alertadmin']  = true;
  header('location: ../../Projek_Bioskop.com');
}

include('../service/database.php');

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id = $id LIMIT 1";

$result = mysqli_query($db, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="../css/style_admin.css">
  <title>Edit Pengguna</title>
</head>

<body>

  <div class="container" style="margin-top: 80px">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-header">
          <i class="fas fa-film"></i>
            EDIT DATA PENGGUNA
          </div>
          <div class="card-body">
            <form action="update_user.php" method="POST">

              <div class="form-group">
                <label><i class="fas fa-edit"></i> USERNAME </label>
                <input type="text" name="username" value="<?php echo $row['username'] ?>" placeholder="Masukkan Judul Film" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
              </div>

              <div class="form-group">
                <label><i class="fas fa-tags"></i> PASSWORD </label>
                <input type="password" name="genre" value="<?php echo $row['password'] ?>" placeholder="Masukkan Genre Film" class="form-control">
              </div>

              <div clas="text-center">
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              </div>
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