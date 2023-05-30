<?php 
session_start();
if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;

}
echo "<h1>Gatau saya kalo ini pak :)</h1>"

?>