<?php

session_start();
if (isset($_SESSION['admin']) and $_SESSION['admin'] == true) {
} else {
    $_SESSION['alertadmin']  = true;
    header('location: ../../Projek_Bioskop.com');
}

include('../service/database.php');

$id = $_GET['id'];

$query = "SELECT * FROM jadwal WHERE id_jadwal = $id LIMIT 1";

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
    <title>Edit Jadwal</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-film"></i>
                        EDIT JADWAL
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="update_jadwal.php" method="POST">

                            <div class="form-group">
                                <label><i class="fas fa-edit"></i>HARI</label>
                                <select name="nama_hari" class="form-control" required>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>

                                <input type="hidden" name="id" value="<?php echo $row['id_jadwal'] ?>">
                            </div>

                            <div class="form-group">
                                <label><i class="fas fa-tags"></i>PILIH FILM</label>
                                <select name="id_film" class="form-control" required>
                                    <?php 
                                        include('../service/database.php');
                                        $no = 1;
                                        $query = mysqli_query($db,"SELECT * FROM film");
                                        while($row = mysqli_fetch_array($query)){
                                    ?>
                                    <option value="<?php echo $row['id']?>"><?php echo $row['judul']?></option>
                                    <?php }?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label><i class="fas fa-clock"></i>JAM MULAI</label>
                                <input type="time" name="jam_mulai" value="<?php echo $row['jam_mulai'] ?>" class="form-control">
                            </div>

                            <div class="form-group">
                                <label><i class="fas fa-money"></i>JAM BERAKHIR</label>
                                <input type="time" name="jam_berakhir" value="<?php echo $row['jam_berakhir'] ?>" class="form-control">
                            </div>

                            
                            <div class="text-center">
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