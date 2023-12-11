<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"><?= $mahasiswa->nama ?></h1>
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
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="tabel-mahasiswa" class="tabel-data table table-bordered table-hover table-striped">

              <tbody>
                <tr>
                  <th>Nama</th>
                  <td><?= $mahasiswa->nama ?></td>
                </tr>

                <tr>
                  <th>Nik</th>
                  <td><?= $mahasiswa->nik ?></td>

                </tr>
                <tr>
                  <th>Kode Pos</th>
                  <td><?= $mahasiswa->kode_pos ?></td>
                </tr>

                <tr>
                  <th>Tempat Lahir</th>
                  <td><?= $mahasiswa->tempat_lahir ?></td>
                </tr>

                <tr>
                  <th>Tanggal Lahir</th>
                  <td><?= $mahasiswa->tanggal_lahir ?></td>
                </tr>
                <tr>

                  <th>Jenis Kelamin</th>
                  <td> <?php
                        if ($mahasiswa->jk == 1) {
                          echo 'Pria';
                        } else {
                          echo 'Wanita';
                        }
                        ?>
                  </td>
                </tr>
                <tr>
                  <th>Kewarganegaraan</th>
                  <td><?= $mahasiswa->kewarganegaraan ?></td>
                </tr>
                <tr>
                  <th>Agama</th>
                  <td><?= $mahasiswa->agama ?></td>
                </tr>
                <tr>
                  <th>Nama Ibu</th>
                  <td><?= $mahasiswa->nama_ibu ?></td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><?= $mahasiswa->email ?></td>
                </tr>
                <tr>
                  <th>No_HP</th>
                  <td><?= $mahasiswa->no_hp ?></td>
                </tr>




                <tr>
                  <th>Provinsi</th>
                  <td><?= $mahasiswa->provinsi ?></td>
                </tr>
                <tr>
                  <th>Kabupaten</th>
                  <td><?= $mahasiswa->kabupaten ?></td>
                </tr>
                <tr>
                  <th>Kecamatan</th>
                  <td><?= $mahasiswa->kecamatan ?></td>
                </tr>
                <tr>
                  <th>Pendidikan</th>
                  <td><?= $mahasiswa->pendidikan ?></td>
                </tr>
                <tr>
                  <th>Sekolah</th>
                  <td><?= $mahasiswa->sekolah ?></td>
                </tr>
                <tr>
                  <th>Nilai Raport</th>
                  <td><?= $mahasiswa->nilai_raport ?></td>
                </tr>
                <tr>
                  <th>Fakultas</th>
                  <td> <?php
                    foreach ($data1 as $data) {
                    ?>
                  <?= $data->nama_jurusan ?>
                <?php
                    break; 
                  }
                ?>
                </td>
                </tr>
                <tr>
                  <th>Prodi</th>
                  <td>
                  <?php
                    foreach ($data1 as $data) {
                    ?>
                  <?= $data->nama_prodi ?>
                <?php
                    break; 
                  }
                ?>

                  </td>

                </tr>


              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->