<?php
require('functions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kendaraan Keluar</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css2/stylesidebar.css">
</head>

<body>
    <?php
    include 'includes/navbar.php'
    ?>
    <div class="home-btn m-2">
        <a class="btn btn-primary mx-auto p-2" href="dashboard.php" role="button"><img src="image/home.png" width="30px"></a>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Kendaraan Keluar</h2>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Id Park</th>
                    <th>Nama Pemilik</th>
                    <th>Jenis Kendaraan</th>
                    <th>Plat Nomor</th>
                    <th>Merk Kendaraan</th>
                    <th>Jam Masuk</th>
                    <th>Jam Keluar</th>
                    <th>Admin</th>
                    <th>Tagihan</th>
 
                </tr>
            </thead>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <script src="js/scriptsidebar.js"></script>
</body>

</html>