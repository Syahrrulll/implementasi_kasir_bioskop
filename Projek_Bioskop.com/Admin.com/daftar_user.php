<?php
session_start();

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
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../css/style_daftarfilm.css">
  <title>Data Pengguna</title>
  <style>


  </style>
</head>

<body>

  <div class="container fade-in" style="margin-top: 80px;">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header text-center bg-primary text-white">
            <h4>DAFTAR PENGGUNA</h4>
          </div>
          <div class="card-body">
            <a href="./" class="btn btn-md btn-success mb-3">KEMBALI</a>
            <table class="table table-hover table-bordered" id="myTable">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">Username</th>
                  <th scope="col">Waktu Di Buat</th>
                  <th scope="col">AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  include('../service/database.php');
                  $no = 1;
                  $query = mysqli_query($db,"SELECT * FROM users");
                  while($row = mysqli_fetch_array($query)){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['created_add'] ?></td>
                  <td class="text-center">
                    <a href="edit_user.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                    <a href="hapus_user.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>
</html>
