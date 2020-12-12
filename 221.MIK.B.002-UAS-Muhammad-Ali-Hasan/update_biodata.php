<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$no_handphone = $_POST['no_handphone'];
$no_handphone_ortu = $_POST['no_handphone_ortu'];


// merubah nama file
$fotobaru = date('His').$foto;
// lokasi penyimpanan foto
$path = "images/".$fotobaru;

if (isset($_POST['submit'])) {
    $sql = $koneksi->query("UPDATE uas_bio SET 
        nim = '$nim',
        nama_lengkap = '$nama_lengkap',
        agama = '$agama',
        jenis_kelamin = '$jenis_kelamin',
        jurusan = '$jurusan',
        nama_ayah = '$nama_ayah',
        nama_ibu = '$nama_ibu',
        alamat = '$alamat',
        asal_sekolah = '$asal_sekolah',
        no_handphone = '$no_handphone',
        no_handphone_ortu = '$no_handphone_ortu',  
        WHERE id='$id'");
} else {
    if (!$sql) {
        header('Location:edit_biodata.php');
    }
}

header('Location:index.php');