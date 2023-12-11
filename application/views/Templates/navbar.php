<!DOCTYPE html>
<html lang="en">
    <html>

    <head>
  
      <!--Icons-->
      <script src="https://unpkg.com/feather-icons"></script>
  
      <title>Universitas Indonesia</title>

      <!-- CSS -->
      <link rel="stylesheet" href="<?= base_url('assets/') ?>css/navbar&footer/navbar&footer.css" />
      <link rel="stylesheet" href="<?= base_url('assets/') ?>css/content/<?= $css ?>" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" />
      
      <meta name="viewport" content="width=device-width,initial-scale=1" />
      <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15/dist/smooth-scroll.polyfills.min.js"></script>
  
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&display=swap" rel="stylesheet" />
    </head>
<body>
    <!-- navbar -->
    <nav class="navbar">
        <a href="<?= base_url() ?>"> <img src="<?= base_url('assets/') ?>gambar/navbar-logo.png" class="logo" /></a>

    
        <div class="navbar-list">
            <a href="<?= base_url() ?>">Beranda</a>
            <a href="<?= base_url('universitas/tentang') ?>">Tentang Kami</a>
            <a href="<?= base_url('universitas/akademik') ?>">Akademik</a>
            <a href="<?= base_url('universitas/people') ?>">People</a>
        </div>
    
    
        <div class="navbar-extra">
            <a class="hubungi" href="<?= base_url('Form_pendaftaran/pendaftaran')?>">DAFTAR</a>
            <a class="hamburger" href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    
    
    <!--Navbar end-->