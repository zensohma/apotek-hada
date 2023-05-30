<?php
include 'config.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM tb_admin WHERE id_admin=$id");

header('location:dataadmin.php');

?>