<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CENTER CELL ACC</title>

  <!-- Custom fonts for this template-->
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carme&display=swap" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-3.css" rel="stylesheet">
  <!-- Slider --->
  <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
  <script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
      OneSignal.init({
        appId: "f20c5b75-e8e9-445e-b13f-4427cb629e2d",
      });
    });
  </script>

</head>


<div class="container-fluid mx-auto">
  <!-- Carousel -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner mt-2">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/carousel3.png') ?>" class="rounded mx-auto d-block w-70" alt="...">
      </div>
    </div>
  </div>

  <!-- Topbar -->
  <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <!-- Navbar Kiri-->
    <a class="navbar-brand" href="<?php echo base_url('home/index') ?>"> <i class="fab fa-cuttlefish"></i>enter Cell</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class=" border-left collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto">

        <li class=" border-left nav">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 ml-3" type="search" placeholder="Cari barang . . .">
            <button class="btn btn-outline-light my-2 my-sm-0 ml-3 mr-4" type="submit">Cari</button>
          </form>
        </li>

        <li class=" border-left border-right nav-link dropdown no-arrow">
          <a class="nav-link dropdown-toggle font-weight-bold ml-3 mr-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-align-left"></i> Kategori
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item font-weight-bold" href="<?php echo base_url('Kategori/anti_gores') ?>">Anti Gores</a>
            <a class="dropdown-item" href="<?php echo base_url('Kategori/casee') ?>">Case</a>
            <a class="dropdown-item" href="<?php echo base_url('Kategori/charger') ?>">Charger</a>
            <a class="dropdown-item" href="<?php echo base_url('Kategori/headset') ?>">Headset</a>
            <a class="dropdown-item" href="<?php echo base_url('Kategori/lainya') ?>">Lainya</a>
          </div>
        </li>

      </ul>
      <!-- End Navbar Kiri-->

      <?php if ($this->session->userdata('nama_toko')) { ?>
        <!-- Navbar Kanan-->
        <ul class="navbar-nav navbar-right">
          <li class=" border-left nav-link">
            <a class="nav-link font-weight-bold ml-3 mr-3" href="<?php echo base_url('keranjang') ?>"><i class="fas fa-shopping-basket"></i>
              Keranjang <span class="badge badge-light ml-2 mr-2"> <?php $keranjang = $this->cart->total_items() ?>
                <?php echo $keranjang ?></span>
            </a>
          </li>
          <li class=" border-left nav-link">
            <a class="nav-link font-weight-bold ml-3 mr-3" href="<?php echo base_url('riwayat_transaksi') ?>"><i class="fas fa-file-invoice"></i> Riwayat Transaksi</a>
          </li>


          <li class=" border-left nav-link dropdown no-arrow">
            <a class="nav-link dropdown-toggle font-weight-bold ml-3 mr-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-align-left"></i> Komplain
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item font-weight-bold" href="<?php echo base_url('retur_barang') ?>">Retur Barang</a>
              <a class="dropdown-item" href="<?php echo base_url('retur_barang/riwayat') ?>">Riwayat Retur</a>
            </div>
          </li>


          <!-- User Navbar -->
          <li class=" border-left nav-link dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <button type="button" class="btn btn-light btn-sm ml-2"><i class="far fa-user"></i> <?php echo $this->session->userdata('nama_toko') ?></button>
            </a>

            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?php echo base_url('auth/edit_profil') ?>">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Edit Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
          <!-- END User Navbar -->

        <?php } else { ?>
          <a class="btn btn-light" href="<?php echo base_url('auth/login') ?>" role="button">LOGIN</a>
        <?php } ?>
        </ul>
        <!-- END Navbar Kanan-->
    </div>
  </nav>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><span class="badge badge-danger">Anda Yakin ingin Logout?</span></h3>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning" role="alert">Data Keranjang akan hilang jika logout!</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout</a>
      </div>
    </div>
  </div>
</div>