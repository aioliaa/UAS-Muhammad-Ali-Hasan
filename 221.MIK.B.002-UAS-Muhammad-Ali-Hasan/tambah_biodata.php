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
              <h5>Tambah Biodata</h5>
              <form action="insert_biodata.php" method="POST">
                <div class="card" style="padding: 20px;">
                  <div class="card-content">
                    <div class="row"> 
                      <div class="row">
                        <div class="input-field col s6">
                          <input placeholder="Masukan Nama Depan" id="nama_depan" type="text" name="nama_depan" class="validate">
                          <label for="nama_depan">Nama Depan</label>
                        </div>
                        <div class="input-field col s6">
                          <input placeholder="Masukan Nama Belakang" id="nama_belakang" type="text" name="nama_belakang" class="validate">
                          <label for="nama_belakang">Nama Belakang</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Masukan NIM Anda" id="nim" type="text" name="nim" class="validate">
                          <label for="nim">NIM</label>
                        </div>
                      </div>
                      <div class="row" style="margin-bottom: 45px">
                        <div class="col s12">
                          <label for="agama">Agama</label>
                          <select class="browser-default" id="agama" name="agama">
                            <option value="" disabled selected>Choose your option</option>
                            <?php $agama = array('Islam', 'Protestan', 'Khatolik','Hindu', 'Budha', 'Kong Hu Chu'); ?>
                            <?php foreach ($agama as $key) : ?>
                            <option value="<?= $key; ?>"><?= $key; ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12" style="margin-bottom: 25px">
                          <label>Jenis Kelamin</label>
                           <p>
                            <label for="laki-laki">
                              <input name="jenis_kelamin" type="radio" value="L" id="laki-laki" />
                              <span>Laki-laki</span>
                            </label>
                          </p>
                          <p>
                            <label for="perempuan">
                              <input name="jenis_kelamin" type="radio" value="P" id="perempuan" />
                              <span>Perempuan</span>
                            </label>
                          </p>
                        </div>
                      </div>
                      <div class="row" style="margin-bottom: 45px">
                        <div class="col s12">
                          <label for="jurusan">Jurusan</label>
                          <select class="browser-default" id="jurusan" name="jurusan">
                            <option value="" disabled selected>Choose your option</option>
                            <?php $jurusan = array('MIK', 'ADP', 'AKP', 'ITS'); ?>
                            <?php foreach ($jurusan as $key) : ?>
                            <option value="<?= $key; ?>"><?= $key; ?></option>
                            <?php endforeach ?>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Masukan Nama Ayah Anda" id="nama_ayah" type="text" name="nama_ayah" class="validate">
                          <label for="nama_ayah">Nama Ayah</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Masukan Nama Ibu Anda" id="nama_ibu" type="text" name="nama_ibu" class="validate">
                          <label for="nama_ibu">Nama Ibu</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <label for="alamat">Alamat Rumah</label>
                          <textarea id="alamat" class="materialize-textarea validate" placeholder="Masukan Alamat Anda" name="alamat"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Masukan Asal Sekolah Anda" id="asal_sekolah" type="text" name="asal_sekolah" class="validate">
                          <label for="asal_sekolah">Asal Sekolah</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Masukan Nomor Handphone Anda" id="no_handphone" type="number" name="no_handphone" class="validate">
                          <label for="no_handphone">No. Handphone</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <input placeholder="Masukan Nomor Hanphone Orang Tua Anda" id="no_handphone_ortu" type="number" name="no_handphone_ortu" class="validate">
                          <label for="no_handphone_ortu">No. Handphone Orang Tua</label>
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