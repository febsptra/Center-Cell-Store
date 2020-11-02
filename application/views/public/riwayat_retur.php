<div class="container-fluid">

  <div class="card mt-2 mb-3">
    <!-- TABEL RIWAYAT RETUR -->
    <?php
    $keyword = $this->session->userdata('id_customer');
    $riwayat_check = $this->model_public->riwayat_retur($keyword); ?>
    <?php if (empty($riwayat_check)) { ?>

      <!-- JIKA RIWAYAT RETUR KOSONG -->
      <div class="card-body">
        <div class="alert alert-danger alert-dismissible fade show ml-3 mr-3" role="alert">
          Anda belum pernah melakukan retur barang . . .
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } else { ?>
        <!-- JIKA RIWAYAT RETUR ADA -->
        <h3 class="card-header font-weight-bold"><span class="badge badge-primary"><i class="fas fa-cart-arrow-down"></i> Keranjang Belanja Anda :</span></h3>
        <div class="card-body">
          <?php echo $this->session->flashdata('retur_sukses') ?>
          <table class="table table-hover table-bordered">
            <thead>
              <tr class="table-head">
                <th>#</th>
                <th>Tgl Retur</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Status</th>
              </tr>
            </thead>
            <?php
            $no = 1;
            foreach ($riwayat_retur as $rr) : ?>
              <tr>
                <td><?php echo $no++ ?> </td>
                <td><?php echo dateindo($rr->tgl_retur) ?> </td>
                <td><?php echo $rr->nama_brg ?> </td>
                <td><?php echo $rr->jumlah_brg ?> </td>
                <td width="30%"><?php echo $rr->status ?> </td>
              </tr>
            <?php endforeach; ?>
          </table>
        <?php } ?>
        <!-- END TABEL RIWAYAT RETUR-->


        </div>
      </div>
  </div>
</div>