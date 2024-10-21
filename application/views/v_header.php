<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="icon" href="<?=base_url();?>/assets/hospital.png" type="image">
    

    <title>Klinik Stmik</title>
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?=base_url(); ?>">Klinik Stmik</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Data Master
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?=base_url('User'); ?>">Data User</a>
          <a class="dropdown-item" href="<?=base_url('Obat'); ?>">Data Obat</a>
          <a class="dropdown-item" href="<?=base_url('Pasien'); ?>">Data Pasien</a>
          <a class="dropdown-item" href="<?=base_url('Dokter'); ?>">Data Dokter</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('Berobat'); ?>">Berobat</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Laporan
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="<?=base_url('Laporan/data_user'); ?>">Laporan Data User</a>
          <a class="dropdown-item" href="<?=base_url('Laporan/data_obat'); ?>">Laporan Data Obat</a>
          <a class="dropdown-item" href="<?=base_url('Laporan/data_pasien'); ?>">Laporan Data Pasien</a>
          <a class="dropdown-item" href="<?=base_url('Laporan/data_dokter'); ?>">Laporan Data Dokter</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url('Auth/logout'); ?>">Logout</a>
      </li>
    </ul>
  </div>
</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    
  </body>
</html>