<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

include "config.php";
if (isset($_POST['submit'])) {
    $nama_supplier = $_POST['nama-supplier'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $result = mysqli_query($conn, "INSERT INTO tb_supplier VALUES('', '$nama_supplier', '$alamat', '$email', '$telepon')");
    
    if($result) {
        echo "<script>alert('Data Berhasil Di tambah');window.location.href='data_supplier.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di tambah');window.location.href='data_supplier.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Supplier</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Additional styles specific to your page */
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Supplier</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama-supplier">Nama Supplier :</label>
                <input class="form-control" type="text" name="nama-supplier" id="nama-supplier" required>
            </div>
            <div class="form-group">
                <label for="nama">Alamat</label>
                <input class="form-control" type="text" name="alamat" id="nama">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input class="form-control" type="text" name="telepon" id="telepon">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Tambah Data!</button>
        </form>
    </div> 
    <!-- Include Bootstrap JS (jQuery must be included before Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
