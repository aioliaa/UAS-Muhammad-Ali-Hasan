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
						<div class="col s12 m12">
							<form action="update_biodata.php" method="POST">
								<div class="card">
									<div class="card-content">
										<div class="row">
											<input type="hidden" name="id" value="<?= $id;?>"> 
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan Nama Anda" id="nama_lengkap" type="text" name="nama_lengkap" class="validate" value=" <?= $row['nama_lengkap']; ?>">
													<label for="nama">Nama Lengkap</label>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan NIM Anda" id="nim" type="text" name="nim" class="validate"  value="<?= $row['nim']; ?>">
													<label for="nim">Nim</label>
												</div>
											</div>
											<div class="row" style="margin-bottom: 45px">
												<div class="col s12">
													<label for="agama">Agama</label>
													<select class="browser-default" id="agama" name="agama">
														<option value="" disabled selected>Choose your option</option>
														<?php $agama = array('Islam', 'Protestan', 'Khatolik','Hindu', 'Budha', 'Kong Hu Chu'); ?>
														<?php foreach ($agama as $key) : ?>
														<option value="<?= $key; ?>"<?= $row['agama']== $key ? 'selected' : '' ?>><?= $key; ?> </option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="col s12" style="margin-bottom: 25px">
													<label>Jenis Kelamin</label>
													 <p>
														<label for="laki-laki">
															<input name="jenis_kelamin" type="radio" value="L" id="laki-laki" <?= $row['jenis_kelamin']== 'L' ? 'checked' : '' ?> />
															<span>Laki-laki</span>
														</label>
													</p>
													<p>
														<label for="perempuan">
															<input name="jenis_kelamin" type="radio" value="P" id="perempuan" <?= $row['jenis_kelamin']== 'P' ? 'checked' : '' ?>/>
															<span>Perempuan</span>
														</label>
													</p>
												</div>
											</div>
											<div class="row" style="margin-bottom: 45px">
												<div class="col s12">
													<label for="agama">Agama</label>
													<select class="browser-default" id="agama" name="agama">
														<option value="" disabled selected>Choose your option</option>
														<?php $jurusan = array('Islam', 'Protestan', 'Khatolik','Hindu', 'Budha', 'Kong Hu Chu'); ?>
														<?php foreach ($jurusan as $key) : ?>
														<option value="<?= $key; ?>"<?= $row['agama']== $key ? 'selected' : '' ?>><?= $key;?> </option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan Nama Ayah Anda" id="nama_ayah" type="text" name="nama_ayah" class="validate"  value="<?= $row['nama_ayah'];  ?>">
													<label for="nama_ayah">Nama Ayah</label>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan Nama Ibu" id="nama_ibu" type="text" name="nama_ibu" class="validate"  value="<?= $row['nama_ibu'];  ?>">
													<label for="nama_ibu">Nama Ibu</label>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<label for="alamat">Alamat Rumah</label>
													<textarea id="alamat" class="materialize-textarea validate" placeholder="Masukan Alamat Anda" name="alamat"><?= $row['alamat'];  ?></textarea>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan Asal Sekolah" id="asal_sekolah" type="text" name="asal_sekolah" class="validate"  value="<?= $row['asal_sekolah'];  ?>">
													<label for="asal_sekolah">Asal Sekolah</label>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan Nomor Telepon" id="no_handphone" type="number" name="no_handphone" class="validate"  value="<?= $row['no_handphone'];  ?>">
													<label for="no_handphone">Nomor Handphone</label>
												</div>
											</div>
											<div class="row">
												<div class="input-field col s12">
													<input placeholder="Masukan Nomor Handphone Orang Tua Anda" id="no_handphone_ortu" type="number" name="no_handphone_ortu" class="validate"  value=" <?= $row['no_handphone_ortu'];  ?>">
													<label for="no_handphone_ortu">No. Handphone Orang Tua Anda</label>
												</div>
											</div>
												<div class="card-action">
														<button class="btn-small blue accent-3" type="submit">Simpan</button>
														<button class="btn-small red accent-3" type="button">Batal</button>
														<a href="index.php" class="btn-small blue-grey lighten-5 black-text">Kembali</a>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>            
			<!--JavaScript at end of body for optimized loading-->
			<script type="text/javascript" src="assets/js/materialize.min.js"></script>
			<script>
				$('#alamat').val('New Text');
				M.textareaAutoResize($('#alamat'));
			</script>
		</body>
</html>