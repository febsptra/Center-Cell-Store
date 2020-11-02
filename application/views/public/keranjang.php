<div class="container-fluid">
  <?php $items = $this->cart->contents(); ?>

  <?php $cart_check = $this->cart->contents(); ?>
  <?php if (empty($cart_check)) {
  ?>
    <div class="card mt-2 mb-3">
      <h3 class="card-header font-weight-bold"><span class="badge badge-primary"><i class="fas fa-cart-arrow-down"></i> Keranjang Belanja Anda :</span></h3>
      <div class="card-body">
        <div class="alert alert-danger alert-dismissible fade show ml-3 mr-3" role="alert">
          Keranjang Belanja Masih Kosong! Silahkan Pilih barang di halaman utama . . .
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      </div>
    </div>

  <?php } else { ?>

    <div class="card mt-2">
      <h3 class="card-header font-weight-bold"><span class="badge badge-primary"><i class="fas fa-cart-arrow-down"></i> Keranjang Belanja Anda :</span></h3>
      <div class="card-body">
        <div class="alert alert-warning alert-dismissible fade show ml-3 mr-3" role="alert">
          Silahkan isi Jumlah barang yang ingin dibeli lalu simpan!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <table class="table mr-3">
          <tr class="table-head">
            <th class="text-center">#</th>
            <th>Nama barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th></th>
            <th>Total Hrg</th>
            <th></th>
          </tr>

          <?php
          $no = 1;
          foreach ($items as $items) : ?>
            <tr class="table-row">
              <td width="10%" align="center"><?php echo $no++ ?> </td>
              <td width="35%"><?php echo $items['name'] ?> </td>
              <td width="10%">Rp <?php echo number_format($items['price'], 0, ',', '.') ?> </td>
              <td width="7%">
                <form class="form-validate" action="<?php echo base_url() . 'keranjang/edit_keranjang/' . $items['rowid']; ?>" method="post">
                  <input type="number" data-rule-max="<?php echo $items['id'] ?>" data-msg-max="Sisa Stok <?php echo $items['id'] ?>" class="form-control input-sm" name="qty" value="<?php echo $items['qty']; ?>">

              </td>
              <td></td>
              <td width="15%">Rp <?php echo number_format($items['subtotal'], 0, ',', '.') ?> </td>
              <td width="20%" align="left">
                <button class='btn btn-sm btn-primary mr-3' type="submit">Simpan</button>
                </form>
                <a href="<?php echo base_url() ?>keranjang/hapus_keranjang/<?php echo $items['rowid']; ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Barang ini"><i class="fas fa-times-circle"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
          <tr>
            <td></td>
            <td colspan="4">

              <?php
              $keyword = $this->session->userdata('username');
              $riwayat_check = $this->model_public->riwayat_transaksi($keyword); ?>
              <?php if (empty($riwayat_check)) { ?>

                <a href="<?php echo base_url('penjualan/input_data') ?>" class='btn btn-primary btn-lg mr-3' type="submit"><i class="fas fa-cart-plus"></i> PROSES PEMBELIAN</a>

              <?php } else { ?>

                <a href="" data-toggle="modal" data-target="#gagalbeli" class='btn btn-primary btn-lg mr-3' type="submit"><i class="fas fa-cart-plus"></i> PROSES PEMBELIAN</a>

              <?php } ?>

              <a href="<?php echo base_url('keranjang/bersihkan_keranjang') ?>" class='btn btn-danger btn-lg mr-3' type="submit" data-toggle="tooltip" data-placement="right" title="Hapus Seluruh Barang Dikeranjang"><i class="fas fa-trash-alt"></i> Bersihkan Keranjang</a>
            </td>

            <td width="250">
              <div class="p-3 mb-2 bg-primary text-white">
                Rp <?php echo number_format($this->cart->total(), 0, ',', '.') ?></div>
            </td>
            <td></td>
          </tr>
        <?php } ?>
        </table>


      </div>
    </div>

</div>

<!-- Login Modal-->
<div class="modal fade" id="gagalbeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel"><span class="badge badge-danger">Selesaikan Transaksi Sebelumnya!</span></h3>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-warning" role="alert">Anda masih memiliki transaksi yang belum dibayar, silahkan bayar atau batalkan transaksi untuk membeli barang lagi.</div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
        <a class="btn btn-primary" href="<?php echo base_url('riwayat_transaksi') ?>">Lihat</a>
      </div>
    </div>
  </div>
</div>