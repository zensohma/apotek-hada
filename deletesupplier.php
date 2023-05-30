<?php
include 'config.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM tb_supplier WHERE id_supplier=$id");

header('location:data_supplier.php');

?>