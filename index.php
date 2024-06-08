<?php
require('functions.php');

if (isset($_POST["login"])) {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // cek username
        if ($result->num_rows === 1) {
            // cek password
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                header("Location: dashboard.php");
                exit;
            } else {
                $msg = "Password salah!";
            }
        } else {
            $msg = "Username tidak ditemukan!";
        }

        $stmt->close();
    } else {
        $msg = "Username dan Password harus diisi!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/styleLogin.css">
</head>
<body>
    <div class="background"></div>
    <div class="form-container">
        <h1>KERKHOF PARKING <br>MANAGEMENT</h1>
        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if (isset($msg)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $msg; ?>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn btn-primary" name="login">Login</button>
        </form>
    </div>
</body>
</html>

