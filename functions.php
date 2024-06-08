<?php
// Koneksi ke database
$con = mysqli_connect("localhost", "root", "", "sistem_parkir");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

function query($query) {
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>
