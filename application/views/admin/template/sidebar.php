<body>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
  <!-- Navbar -->
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header-->
          <a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Center</strong><strong>Cell</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">C</strong><strong>C</strong></div>
          </a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <!-- Log out               -->
        <div class="list-inline-item logout">
          <a id="logout" href="<?php echo base_url('admin/login/logout') ?>" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="fas fa-sign-out-alt"></i></a></div>
      </div>
      </div>
    </nav>
  </header>
  <!-- END Navbar -->

  <div class="d-flex align-items-stretch">

    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center"><a href="<?php echo base_url() . 'uploads/pegawai/' . $this->session->userdata('foto') ?>">
          <div class="avatar"><img src="<?php echo base_url() . 'uploads/pegawai/' . $this->session->userdata('foto') ?>" alt="..." class="img-fluid rounded-circle"></div>
        </a>
        <div class="title">
          <h1 class="h5 text-primary"><?php echo $this->session->userdata('nama_lengkap') ?></h1>
          <p><?php echo $this->session->userdata('jabatan') ?></p>
        </div>
      </div>
      <hr class="sidebar-divider my-1">
      <!-- Sidebar Navidation Menus-->
      <ul class="list-unstyled">
        <li><a href="http://localhost/CCbjm/" target="_blank" rel="nofollow"><i class="fas fa-store-alt"></i>Center Cell</a></li>
        <hr class="sidebar-divider my-1">
        <!-- Divider -->
        <ul class="list-unstyled">

          <!-- FUNGSI IF ELSE SIDEBAR ADMIN-->
          <?php if ($this->session->userdata('jabatan') != 'Admin') { ?>

            <!-- SIDEBAR PEGAWAI-->
            <li class="<?php if ($this->uri->segment(2) == "data_penjualan" || $this->uri->segment(2) == "data_pembelian") {
                          echo "active";
                        } ?>"><a href="#Transaksi" aria-expanded="" data-toggle="collapse"><i class="fas fa-donate"></i></i>Transaksi </a>
              <ul id="Transaksi" class="collapse list-unstyled <?php if ($this->uri->segment(2) == "data_penjualan" || $this->uri->segment(2) == "data_pembelian") {
                                                                  echo "show";
                                                                } ?>">
                <li class="<?php if ($this->uri->segment(2) == "data_penjualan") {
                              echo "active";
                            } ?>"><a href="<?php echo base_url('admin/data_penjualan') ?>">Penjualan</a></li>
                <li class="<?php if ($this->uri->segment(2) == "data_pembelian") {
                              echo "active";
                            } ?>"><a href="<?php echo base_url('admin/data_pembelian') ?>">Pembelian</a></li>
              </ul>
            </li>
            <?php $jumlah_menunggu = $this->model_admin->jumlah_menunggu(); ?>
            <li class="<?php if ($this->uri->segment(2) == "data_pembayaran") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_pembayaran') ?>"><i class="fas fa-money-check-alt"></i>Ver. Pembayaran
                <span class="badge badge-danger"><?php echo ($jumlah_menunggu->total); ?></span>
              </a>
            </li>
            <li class="<?php if ($this->uri->segment(2) == "data_retur") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_retur') ?>"><i class="fas fa-exchange-alt"></i>Retur Barang</a></li>
            <li class="<?php if ($this->uri->segment(2) == "data_rusak") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_rusak') ?>"><i class="fas fa-trash"></i>Barang Rusak</a>
            </li>

            <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-website"></i>Report </a>
              <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li><a href="pages-contacts.html">Barang Paling banyak terjual</a></li>
                <li><a href="pages-invoice.html">Barang Paling Sering Terjual</a></li>
                <li><a href="login.html">Total Keuntungan</a></li>
                <li><a href="login.html">Total Kerugian barang rusak</a></li>
                <li><a href="pages-profile.html">Asset yang dimiliki</a></li>
                <li><a href="pages-pricing.html">Stok barang</a></li>
              </ul>
            </li>
            <!-- END SIDEBAR PEGAWAI-->

          <?php } else { ?>

            <!-- SIDEBAR ADMIN-->
            <li class="<?php if ($this->uri->segment(2) == "data_pegawai") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_pegawai') ?>"><i class="fas fa-user"></i>Pegawai </a>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "data_supplier") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_supplier') ?>"><i class="fas fa-people-carry"></i>Supplier </a>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "data_customer") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_customer') ?>"><i class="fas fa-user-check"></i>Customer </a>
            </li>

            <hr class="sidebar-divider my-1">

            <li class="<?php if ($this->uri->segment(2) == "data_barang") {
                          echo "active";
                        } ?>"> <a href="<?php echo base_url('admin/data_barang') ?>"><i class="fas fa-archive"></i>Barang </a>
            </li>

            <li class="<?php if ($this->uri->segment(2) == "data_penjualan" || $this->uri->segment(2) == "data_pembelian") {
                          echo "active";
                        } ?>"><a href="#Transaksi" aria-expanded="" data-toggle="collapse"><i class="fas fa-donate"></i></i>Transaksi </a>
              <ul id="Transaksi" class="collapse list-unstyled <?php if ($this->uri->segment(2) == "data_penjualan" || $this->uri->segment(2) == "data_pembelian") {
                                                                  echo "show";
                                                                } ?>">
                <li class="<?php if ($this->uri->segment(2) == "data_penjualan") {
                              echo "active";
                            } ?>"><a href="<?php echo base_url('admin/data_penjualan') ?>">Penjualan</a></li>
                <li class="<?php if ($this->uri->segment(2) == "data_pembelian") {
                              echo "active";
                            } ?>"><a href="<?php echo base_url('admin/data_pembelian') ?>">Pembelian</a></li>
              </ul>
            </li>
            <?php $jumlah_menunggu = $this->model_admin->jumlah_menunggu(); ?>
            <li class="<?php if ($this->uri->segment(2) == "data_pembayaran") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_pembayaran') ?>"><i class="fas fa-money-check-alt"></i>Ver. Pembayaran
                <span class="badge badge-danger"><?php echo ($jumlah_menunggu->total); ?></span>
              </a>
            </li>
            <li class="<?php if ($this->uri->segment(2) == "data_retur") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_retur') ?>"><i class="fas fa-exchange-alt"></i>Retur Barang</a></li>
            <li class="<?php if ($this->uri->segment(2) == "data_rusak") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/data_rusak') ?>"><i class="fas fa-trash"></i>Barang Rusak</a>
            </li>
            <li class="<?php if ($this->uri->segment(2) == "report") {
                          echo "active";
                        } ?>">
              <a href="<?php echo base_url('admin/report') ?>"><i class="icon-website"></i>Report</a>
            </li>

            <!--
    <li><a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse"> Report </a>
      <ul id="pagesDropdown" class="collapse list-unstyled ">
        <li><a href="pages-contacts.html">Barang Paling banyak terjual</a></li>
        <li><a href="pages-invoice.html">Barang Paling Sering Terjual</a></li>
        <li><a href="login.html">Total Keuntungan</a></li>
        <li><a href="login.html">Total Kerugian barang rusak</a></li>
        <li><a href="pages-profile.html">Asset yang dimiliki</a></li>
        <li><a href="pages-pricing.html">Stok barang</a></li>
      </ul>
    </li>-->
            <!-- END SIDEBAR ADMIN-->
          <?php } ?>

    </nav>
    <!-- Sidebar Navigation end-->