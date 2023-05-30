<?php 
include 'config.php';

$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat=$id");
header('Location: obat.php');


?>