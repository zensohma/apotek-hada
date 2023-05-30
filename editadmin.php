<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;

}
include 'config.php';
if (isset($_POST['edit'])) {
    $id_admin = $_POST['id_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama_admin = $_POST['nama'];

    $result = mysqli_query($conn, "UPDATE tb_admin SET username='$username', password='$password', nama_admin='$nama_admin' WHERE id_admin='$id_admin'");
    if($result){
        echo "<script>alert('Data Berhasil Di ubah');window.location.href='dataadmin.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Di ubah');window.location.href='dataadmin.php'</script>";
    }
}   

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin='$id'");
while($data = mysqli_fetch_array($query)) {


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
            <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
            <div class="form-group">
                <label for="username">Username :</label>
                <input class="form-control" type="text" name="username" id="username" required value="<?php echo $data['username']; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input class="form-control" type="text" name="password" id="password" required value="<?php echo $data['password']; ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama Admin :</label>
                <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $data['nama_admin']; ?>">
            </div>
            <button class="btn btn-primary" type="submit" name="edit">Edit Data!</button>
        </form>
        <?php } ?>
    </div> 
    <!-- Include Bootstrap JS (jQuery must be included before Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
