<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;

}


include "config.php";
if (isset($_POST['submit'])) {
    $nama_obat = $_POST['nama-obat'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    $result = mysqli_query($conn, "INSERT INTO tb_obat VALUES('', '$nama_obat', '$stock', '$harga')");
    
    if($result) {
        echo "<script>alert('Data Berhasil Di tambah');window.location.href='obat.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di tambah');window.location.href='obat.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Obat</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        /* Additional styles specific to your page */
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Data Obat</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama-obat">Nama Obat</label>
                <input class="form-control" type="text" name="nama-obat" id="nama-obat" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock" id="stock" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga :</label>
                <input class="form-control" type="text" name="harga" id="harga" required>
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Tambah Data!</button>
        </form>
    </div> 
    <!-- Include Bootstrap JS (jQuery must be included before Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
