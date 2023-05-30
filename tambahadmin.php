<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

include 'config.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $result = mysqli_query($conn, "INSERT INTO tb_admin VALUES('', '$username', '$password', '$nama')");

    if($result) {
        echo "<script>alert('Data Berhasil Di tambah');window.location.href='dataadmin.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di tambah');window.location.href='dataadmin.php'</script>";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Additional styles specific to your page */
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Admin</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="username">Username :</label>
                <input class="form-control" type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password : </label>
                <input class="form-control" type="text" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="nama">Nama Admin :</label>
                <input class="form-control" type="text" name="nama" id="nama">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Tambah Data!</button>
        </form>
    </div> 
    <!-- Include Bootstrap JS (jQuery must be included before Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
