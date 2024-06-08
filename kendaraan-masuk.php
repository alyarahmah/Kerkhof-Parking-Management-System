<?php
require('functions.php');

// Ambil data dari tabel det_parkir dengan JOIN ke tabel users dan kendaraan
$parkir = query("SELECT det_parkir.*, kendaraan.nama_pemilik, kendaraan.jenis_kendaraan, kendaraan.plat, kendaraan.merk_kendaraan, users.nama_admin
                 FROM det_parkir
                 JOIN users ON det_parkir.id_user = users.id_user
                 JOIN kendaraan ON det_parkir.plat = kendaraan.plat");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan Masuk</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/stylesidebar.css">
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    
    <div class="home-btn m-2">
        <a class="btn btn-primary mx-auto p-2" href="dashboard.php" role="button"><img src="image/home.png" width="30px"></a>
    </div>

    <div class="container">
        <div class="container mb-4">
            <div class="d-flex align-items-center">
                <h2 class="me-auto">Kendaraan Masuk</h2>
                <a class="btn btn-primary" href="#" role="button">Tambah Kendaraan</a>
            </div>
        </div>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Id Park</th>
                    <th>Nama Pemilik</th>
                    <th>Jenis Kendaraan</th>
                    <th>Plat Nomor</th>
                    <th>Merk </th>
                    <th>Jam Masuk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; // Inisialisasi variabel untuk nomor urut ?>
                
                <?php foreach ($parkir as $row) : ?>
                    <tr>
                        <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                        <td><?php echo $row["id_park"]; ?></td>
                        <td><?php echo $row["nama_pemilik"]; ?></td>
                        <td><?php echo $row["jenis_kendaraan"]; ?></td>
                        <td><?php echo $row["plat"]; ?></td>
                        <td><?php echo $row["merk_kendaraan"]; ?></td>
                        <td><?php echo $row["jam_masuk"]; ?></td>
                        <td><a class="btn btn-primary" href="#" role="button">Action</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="js/scriptsidebar.js"></script>             
</body>

</html>