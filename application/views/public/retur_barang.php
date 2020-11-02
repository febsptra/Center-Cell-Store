<div class="container-fluid">
  <div class="card mt-2 mb-3">
    <div class="card-body">


      <!-- TABEL TABEL BARANG YANG PERNAH DIBELI -->
      <?php
      $keyword = $this->session->userdata('username');
      $riwayat_check = $this->model_public->riwayat_barang($keyword); ?>
      <?php if (empty($riwayat_check)) { ?>

        <!-- JIKA TABEL BARANG YANG PERNAH DIBELI KOSONG -->
        <div class="alert alert-danger alert-dismissible fade show ml-3 mr-3" role="alert">
          Anda belum pernah melakukan pembelian barang . . .
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php } else { ?>

        <!-- JIKA ADA TABEL BARANG YANG PERNAH DIBELI -->
        <h5 class="text-uppercase"><strong class="text-dark"><?php echo $this->session->userdata('nama_toko') ?></strong></h5>
        <p class="mb-4">
          Alamat : <br>
          <?php echo $this->session->userdata('alamat') ?><br>
          <br>
          No HP : <br>
          <?php echo $this->session->userdata('no_hp') ?><br>

          <br><text class="text-danger"><b> Cara Retur : Pilih barang yang ingin diretur masukan jumlahnya, Jika data sudah di input kurir kami akan datang ketoko anda (sesuai alamat saat anda menginput data) untuk mengganti barang anda.</b></text>
        </p>
        <div class="alert alert-primary" role="alert">
          Berikut barang yang pernah anda beli.
        </div>
        <table class="table table-hover table-bordered">
          <thead>
            <tr class="table-head">
              <th>#</th>
              <th>Nama Barang</th>
              <th class="text-center"></th>
            </tr>
          </thead>

          <?php
          $no = 1;
          foreach ($retur as $rt) : ?>
            <tr>
              <td><?php echo $no++ ?> </td>
              <td><?php echo $rt->nama_brg ?> </td>
              <td align="center">
                <a id=retur_brg data-toggle="modal" data-target="#modal_retur" data-nama_brg="<?php echo $rt->nama_brg ?>">

                  <button class="btn btn-primary">
                    <i class="fas fa-edit"></i> Retur</button></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>

      <?php } ?>
      <!-- END TABEL BARANG RYANG PERNAH DIBELI-->


    </div>
  </div>

</div>



<!-- MODAL edit -->
<div class="modal fade bd-example-modal-lg" name="modal_retur" id="modal_retur" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">
        <strong id="exampleModalLabel" class="modal-title"><i class="fas fa-exchange-alt"></i> RETUR BARANG</strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <!-- MODAL FORM EDIT -->

        <form method="post" action="<?php echo base_url() . 'retur_barang/retur' ?>" enctype="multipart/form-data">
          <input type="hidden" name="id_customer" class="form-control" value="<?php echo $this->session->userdata('id_customer') ?>">
          <input type="hidden" name="nama_toko" class="form-control" value="<?php echo $this->session->userdata('nama_toko') ?>">
          <input type="hidden" name="alamat" class="form-control" value="<?php echo $this->session->userdata('alamat') ?>">
          <input type="hidden" name="no_hp" class="form-control" value="<?php echo $this->session->userdata('no_hp') ?>">

          <div class="form-group">
            <label for="nama_brg">Nama Barang</label>
            <input type="text" class="form-control" name="nama_brg" id="nama_brg" readonly>
          </div>
          <div class="form-group">
            <label for="jumlah_brg">Jumlah</label>
            <input type="number" class="form-control" id="jumlah_brg" name="jumlah_brg" required>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- END MODAL FORM EDIT -->
      </div>
    </div>
  </div>
</div>
<!-- END MODAL EDIT -->

<!-- SCRIPT -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $(document).on("click", "#retur_brg", function() {
    var nama_brg = $(this).data('nama_brg');
    $("#modal_retur #nama_brg").val(nama_brg);
  })
</script>
<!-- END SCRIPT -->