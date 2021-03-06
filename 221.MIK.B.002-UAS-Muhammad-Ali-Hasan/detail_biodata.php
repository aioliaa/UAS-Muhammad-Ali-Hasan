<?php 
include 'koneksi.php';
$id = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM uas_bio WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s4 m4">
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-content">
                        <table>
                            <tr>
                                <td width="100pt">NIM</td>
                                <td><?= $row['nim']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Nama Lengkap</td>
                                <td><?= $row['nama_lengkap']; ?></td>   
                            </tr>

                            <tr>
                                <td width="100pt">Agama</td>
                                <td><?= $row['agama']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Jenis Kelamin</td>
                                <td><?= $row['jenis_kelamin']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Nama Ayah</td>
                                <td><?= $row['nama_ayah']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Nama Ibu</td>
                                <td><?= $row['nama_ibu']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Alamat Rumah</td>
                                <td><?= $row['alamat']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Asal Sekolah</td>
                                <td><?= $row['asal_sekolah']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">No. Handphone</td>
                                <td><?= $row['no_handphone']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">No. Handphone Orang Tua</td>
                                <td><?= $row['no_handphone_ortu']; ?></td>   
                            </tr>
                        </table>
                    </div>
                    <div class="card-action">
                        <a href="index.php">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
            </div>
        </div>
    </div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>