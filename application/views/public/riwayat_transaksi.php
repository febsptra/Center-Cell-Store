<div class="container-fluid">

  <?php $items = $this->cart->contents(); ?>
  <div class="card mt-2 mb-3">


    <?php echo $this->session->flashdata('verifikasi_pembayaran') ?>
    <?php echo $this->session->flashdata('bayar_sukses') ?>

    <!-- TABEL TRANSAKSI MENUNGGU -->
    <?php
    $keyword = $this->session->userdata('username');
    $riwayat_check = $this->model_public->riwayat_transaksi($keyword); ?>
    <?php if (empty($riwayat_check)) { ?>

      <!-- JIKA TRANSAKSI MENUNGGU KOSONG -->

    <?php } else { ?>

      <!-- JIKA ADA TRANSAKSI MENUNGGU -->
      <div class="card-body">
        <div class="alert alert-warning" role="alert">
          Transaksi yang menunggu untuk Dibayar.
        </div>
        <table class="table table-hover table-bordered">
          <thead>
            <tr class="table-head">
              <th>#</th>
              <th>Kode Transaksi</th>
              <th>Tanggal Transaksi</th>
              <th>Nama Toko</th>
              <th>Alamat</th>
              <th>Total Tagihan</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>

          <?php
          $no = 1;
          foreach ($penjualan as $pnj) : ?>
            <tr>
              <td><?php echo $no++ ?> </td>
              <td width="15%"><?php echo $pnj->kode_transaksi ?> </td>
              <td><?php echo dateindo($pnj->tgl_transaksi) ?> </td>
              <td><?php echo $pnj->nama_toko ?> </td>
              <td width="30%"><?php echo $pnj->alamat ?> </td>
              <td>Rp <?php echo number_format($pnj->jumlah_pembayaran, 0, ',', '.') ?> </td>
              <td><?php echo $pnj->status_pembayaran ?></td>
              <td align="center">

                <?php echo anchor('penjualan/pembayaran/' . $pnj->kode_transaksi, '<div class="btn btn-primary mr-3"> <i class="far fa-check-square"></i> Bayar</div>') ?>

                <?php echo anchor('riwayat_transaksi/detail/' . $pnj->kode_transaksi, '<div class="btn btn-success mr-3"> <i class="far fa-check-square"></i> Detail</div>') ?>

                <?php echo anchor('riwayat_transaksi/hapus_transaksi/' . $pnj->kode_transaksi, '<div class="btn btn-danger"> <i class="far fa-check-square"></i> Batalkan</div>') ?>

              </td>
            </tr>
          <?php endforeach; ?>
        </table>

      <?php } ?>
      <!-- END TABEL TRANSAKSI MENUNGGU -->


      <!-- TABEL TRANSAKSI DIBAYAR -->
      <?php
      $keyword = $this->session->userdata('username');
      $riwayat_check = $this->model_public->transaksi_dibayar($keyword); ?>
      <?php if (empty($riwayat_check)) { ?>

        <!-- JIKA TABEL TRANSAKSI DIBAYAR KOSONG -->

        <h3 class="card-header font-weight-bold"><span class="badge badge-primary"><i class="fas fa-cart-arrow-down"></i>Riwayat Transaksi :</span></h3>
        <div class="card-body">
          <table class="table table-hover table-bordered">
            <div class="alert alert-warning" role="alert">
              BELUM ADA TRANSAKSI YANG DISELESAIKAN.
            </div>

          <?php } else { ?>

            <!-- JIKA TABEL TRANSAKSI DIBAYAR ADA -->
            <h3 class="card-header font-weight-bold"><span class="badge badge-primary"><i class="fas fa-cart-arrow-down"></i>Riwayat Transaksi :</span></h3>
            <div class="card-body">

              <a class="btn btn-danger mb-3" href="<?php echo base_url() . 'riwayat_transaksi/print'; ?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print Seluruh Riwayat Transaksi</a>
              <table class="table table-hover table-bordered">
                <thead>
                  <tr class="table-head">
                    <th>#</th>
                    <th>Kode Transaksi</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Toko</th>
                    <th>Metode Pembayaran </th>
                    <th>Total Tagihan</th>
                    <th>Status</th>
                    <th></th>
                  </tr>
                </thead>

                <?php
                $no = 1;
                foreach ($penjualan_dibayar as $dibayar) : ?>
                  <tr>
                    <td><?php echo $no++ ?> </td>
                    <td width="15%"><?php echo $dibayar->kode_transaksi ?> </td>
                    <td><?php echo dateindo($dibayar->tgl_pembayaran) ?> </td>
                    <td><?php echo $dibayar->nama_toko ?> </td>
                    <td><?php echo $dibayar->metode_pembayaran ?> </td>
                    <td>Rp <?php echo number_format($dibayar->jumlah_pembayaran, 0, ',', '.') ?> </td>
                    <td><?php echo $dibayar->status_pembayaran ?></td>
                    <td align="center">
                      <?php echo anchor('riwayat_transaksi/detail/' . $dibayar->kode_transaksi, '<div class="btn btn-success mr-3"> <i class="far fa-check-square"></i> Detail</div>') ?>
                      <a class="btn btn-danger" href="<?php echo base_url() . 'riwayat_transaksi/print_transaksi/' . $dibayar->kode_transaksi; ?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print</a>
                    </td>
                  </tr>

                <?php endforeach; ?>
              </table>
            <?php } ?>
            <!-- END TABEL TRANSAKSI DIBAYAR -->

            </div>
        </div>


      </div>