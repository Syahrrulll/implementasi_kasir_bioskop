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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/style_admin.css">
    <title>Atur Jadwal</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-film"></i> Atur Jadwal Film
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="POST" action="simpan_jadwal.php">

                            <div class="form-group">
                                <label><i class="fas fa-edit"></i> HARI TAYANG FILM</label>
                                <select name="nama_hari" class="form-control" required>
                                    <option value="Senin">Senin</option>
                                    <option value="Selasa">Selasa</option>
                                    <option value="Rabu">Rabu</option>
                                    <option value="Kamis">Kamis</option>
                                    <option value="Jumat">Jumat</option>
                                    <option value="Sabtu">Sabtu</option>
                                    <option value="Minggu">Minggu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label><i class="fas fa-video"></i> Pilih Film</label>
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
                                <label><i class="fas fa-clock"></i>Jam Mulai</label>
                                <input type="time" name="jam_mulai" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label><i class="fa fa-clock"></i>Jam Berakhir</label>
                                <input type="time" name="jam_berakhir" class="form-control" required>
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