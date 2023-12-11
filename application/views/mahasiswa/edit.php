<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Mahasiswa</h1>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row mb-2">
      <div class="col-sm-6">
        <a class="btn btn-danger" href="<?php echo base_url('mahasiswa'); ?>">
          <i class="fas fa-times mr-1"></i>
          Batal
        </a>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main Content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">Ubah Data</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="post" action="<?= base_url('mahasiswa/update/' . $mahasiswa->id); ?>">
            <div class="card-body">
              <?php
              if ($this->session->flashdata('message')) {
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('message');
                echo "</div>";
              }
              ?>


              <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" value="<?= $mahasiswa->nama ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="nik">Kode Pos	</label>
                <input name="kode_pos" type="text" class="form-control" id="kode_pos" value="<?= $mahasiswa->kode_pos ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir		</label>
                <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="<?= $mahasiswa->tempat_lahir ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <input name="kewarganegaraan" type="text" class="form-control" id="kewarganegaraan" value="<?= $mahasiswa->kewarganegaraan ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="nik">Agama</label>
                <input name="agama" type="text" class="form-control" id="agama" value="<?= $mahasiswa->agama ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input name="nama_ibu" type="text" class="form-control" id="nama_ibu" value="<?= $mahasiswa->nama_ibu ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $mahasiswa->alamat ?>" maxlength="50">
              </div>


              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" id="email" value="<?= $mahasiswa->email ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="no-hp">Nomor HP</label>
                <input name="no_hp" type="text" class="form-control" id="no-hp" value="<?= $mahasiswa->no_hp ?>" maxlength="15">
              </div>

              <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input name="provinsi" type="text" class="form-control" id="provinsi" value="<?= $mahasiswa->provinsi ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="kabupaten">Kabupaten</label>
                <input name="kabupaten" type="text" class="form-control" id="kabupaten" value="<?= $mahasiswa->kabupaten ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="kecamatan">Kecamatan</label>
                <input name="kecamatan" type="text" class="form-control" id="kecamatan" value="<?= $mahasiswa->kecamatan ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <input name="pendidikan" type="text" class="form-control" id="pendidikan" value="<?= $mahasiswa->pendidikan ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="sekolah">Sekolah</label>
                <input name="sekolah" type="text" class="form-control" id="sekolah" value="<?= $mahasiswa->sekolah ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="nilai_raport">Nilai Raport</label>
                <input name="nilai_raport" type="text" class="form-control" id="nilai_raport" value="<?= $mahasiswa->nilai_raport ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input name="provinsi" type="text" class="form-control" id="provinsi" value="<?= $mahasiswa->provinsi ?>" maxlength="50">
              </div>

              <div class="form-group">
                <label>Fakultas</label>
                <select name="jurusan_id" class="form-control select-jurusan" style="width: 100%;">
                  <option></option>
                  <?php foreach ($jurusan as $j_data) { ?>
                    <option value="<?= $j_data->id ?>" <?= ($j_data->id == $mahasiswa->jurusan_id) ? 'selected="selected"' : ''; ?> >(<?= $j_data->kode_jurusan ?>) <?= $j_data->nama_jurusan ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label>Program Studi</label>
                <select name="prodi_id" class="form-control select-prodi" style="width: 100%;">
                  <option></option>
                </select>
              </div>


            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->