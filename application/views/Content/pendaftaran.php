<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css">
    <script src="<?= base_url('assets/') ?>jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container p-3 my-3 border">
        <h1 class="text-center">Form Pendaftaran Mahasiswa Baru</h1>
        <!-- <?php
                // Include file koneksi, untuk koneksikan ke database

                // Fungsi untuk mencegah inputan karakter yang tidak sesuai
                // function input($data) {
                //     $data = trim($data);
                //     $data = stripslashes($data);
                //     $data = htmlspecialchars($data);
                //     return $data;
                // }
                // Cek apakah ada kiriman form dari method post
                // if ($_SERVER["REQUEST_METHOD"] == "POST") {

                //     $nama=input($_POST["nama"]);
                //     $nik=input($_POST["nik"]);
                //     $tempat_lahir=input($_POST["tempat_lahir"]);
                //     $tanggal_lahir=input($_POST["tanggal_lahir"]);
                //     $jk=input($_POST["jk"]);
                //     $kewarganegaraan=input($_POST["kewarganegaraan"]);
                //     $agama=input($_POST["agama"]);
                //     $nama_ibu=input($_POST["nama_ibu"]);
                //     $email=input($_POST["email"]);
                //     $no_telp=input($_POST["no_telp"]);
                //     $alamat=input($_POST["alamat"]);
                //     $kode_pos=input($_POST["kode_pos"]);
                //     $provinsi=input($_POST["provinsi"]);
                //     $kabupaten=input($_POST["kabupaten"]);
                //     $kecamatan=input($_POST["kecamatan"]);
                //     $pendidikan=input($_POST["pendidikan"]);
                //     $sekolah=input($_POST["sekolah"]);
                //     $nilai_raport=input($_POST["nilai_raport"]);
                //     $prog1=input($_POST["prog1"]);
                //     $prog2=input($_POST["prog2"]);

                //     //Query input menginput data kedalam tabel pendaftaraan
                //     $sql="insert into pendaftaran (nama,nik,tempat_lahir,tanggal_lahir,jk,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_raport,prog1,prog2) values
                // 	('$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_raport,'$prog1','$prog2')";

                //     //Mengeksekusi/menjalankan query diatas
                //     $hasil=mysqli_query($kon,$sql);

                //     //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                //     if ($hasil) { 
                //         echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
                //     }
                //     else {
                //         echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
                //     }
                // }
                ?> -->
        <form action="<?= base_url('Form_pendaftaran/index') ?>" id="form" method="post">
            <div class="alert alert-primary">
                <strong>Data Diri</strong>
            </div>
            <div class="row">
                <div class="col-sm-7">

                    <div class="form-group">
                        <label>Nama Lengkap:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nomor Identitas (NIK):</label>
                        <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Tempat Lahir:</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Tanggal Lahir:</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Jenis Kelamin:</label>
                        <select class="form-control" name="jk">
                            <option>Pilih</option>
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kewarganegaraan:</label>
                        <select class="form-control" name="kewarganegaraan">
                            <option>Pilih</option>
                            <option value="WNI">Warga Negara Indonesia</option>
                            <option value="WNA">Warga Negara Asing</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Agama:</label>
                        <select class="form-control" name="agama">
                            <option>Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Ibu Kandung:</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>No Telp:</label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Data Alamat Asal</strong>
            </div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Alamat:</label>
                        <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Kode Pos:</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <input type="text" name="provinsi" class="form-control" placeholder="Provinsi">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">

                    </div>
                </div>

            </div>
            <div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan">
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK-IPA">SMK - IPA</option>
                            <option value="SMK-IPS">SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="nilai_raport" class="form-control" placeholder="Masukan Rata-rata nilai raport">
                    </div>
                </div>
            </div>

            <div class="alert alert-primary">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 1:</label>
                        <div class="form-group">
                            <label>Nama Fakultas</label>
                            <select name="jurusan_id" class="form-control select-jurusan" style="width: 100%;">
                                <option></option>
                                <?php foreach ($jurusan as $j_data) { ?>
                                    <option value="<?= $j_data->id ?>" <?= ($j_data->id == set_value('jurusan_id')) ? 'selected="selected"' : ''; ?>>(<?= $j_data->kode_jurusan ?>) <?= $j_data->nama_jurusan ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label style="color: aliceblue;">Pilih Program Studi 1:</label>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select name="prodi_id" class="form-control select-prodi" style="width: 100%;">
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

            </div>
        </form>
    </div>


    <!-- DataTables -->
    <script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.min.js"></script>


    <!-- Select2 -->
    <script src="<?= base_url() ?>public/plugins/select2/js/select2.full.min.js"></script>

    <!-- page script -->
    <?php $this->load->view('theme/script2') ?>

</body>

</html>