<?php  
include 'koneksi.php';

$nim = $_POST['nim'];
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];
$no_handphone = $_POST['no_handphone'];
$no_handphone_ortu = $_POST['no_handphone_ortu'];

$nama_lengkap = $nama_depan .' '. $nama_belakang;


	if (isset($_POST['submit'])) {
		$sql = $koneksi->query("INSERT INTO biodata VALUES('', '$nim', '$nama_lengkap', '$agama', '$jenis_kelamin', '$nama_ayah', '$nama_ibu', '$alamat', '$asal_sekolah', '$jurusan', '$no_handphone', '$no_handphone_ortu')");
    header('Location : index.php');
	} 
	




?>