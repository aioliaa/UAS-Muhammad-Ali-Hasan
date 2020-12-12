<?php 
include 'koneksi.php';
$id = $_GET['id'];

$sql = $koneksi->query("DELETE FROM uas_bio WHERE id='$id'");

header('Location:index.php');

?>