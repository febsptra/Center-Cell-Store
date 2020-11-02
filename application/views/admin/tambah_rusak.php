<div class="page-content">
  <div class="container-fluid">

    <!-- Navigasi -->
    <div class="container-fluid">
      <a type="button" class="btn btn-primary mt-4 ml-2" href="<?php echo base_url('admin/data_rusak') ?>"> Data Barang Rusak</a>
      <button type="button" class="btn btn-secondary mt-4 ml-2"><i class="fas fa-plus"></i> Tambah Data</button>
    </div>
    <!-- end navigasi -->

    <!-- CARD -->
    <div class="container-fluid">
      <div class="card mt-3">
        <div class="card-header">
          <h1 class="text-oren"><i class="fas fa-search-minus"></i> Cari Barang yang Rusak</h1>
        </div>
        <div class="card-body">
          <!-- TABEL DATATABLES-->
          <div class="table-responsive">
            <table id="datatable1" style="width: 100%;" class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama barang</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($barang as $brg) : ?>
                  <tr>
                    <td><?php echo $no++ ?> </td>
                    <td><?php echo $brg->nama_brg ?> </td>
                    <td><?php echo $brg->kategori_brg ?> </td>
                    <td>Rp <?php echo number_format($brg->hrg_jual, 0, ',', '.') ?> </td>
                    <td><?php echo $brg->stok_brg ?> </td>
                    <td>
                      <a id=info_brg data-toggle="modal" data-target="#modal_info" data-no_brg="<?php echo $brg->no_brg ?>" data-nama_supplier="<?php echo $brg->nama_supplier ?>" data-kategori_brg="<?php echo $brg->kategori_brg ?>" data-nama_brg="<?php echo $brg->nama_brg ?>" data-hrg_beli="Rp <?php echo number_format($brg->hrg_beli, 0, ',', '.') ?>" data-hrg_jual="Rp <?php echo number_format($brg->hrg_jual, 0, ',', '.') ?>" data-laba="Rp <?php echo number_format($brg->laba, 0, ',', '.') ?>" data-stok_brg="<?php echo $brg->stok_brg ?>" data-keterangan="<?php echo $brg->keterangan ?>" data-foto_brg="<?php echo $brg->foto_brg ?>">
                        <button class="btn btn-success mr-3" data-toggle="modal" data-target="#modal-edit">
                          <i class="fas fa-info"></i>nfo</button></a>
                      <a id=edit_brg data-toggle="modal" data-target="#modal_edit" data-no_brg="<?php echo $brg->no_brg ?>" data-nama_supplier="<?php echo $brg->nama_supplier ?>" data-kategori_brg="<?php echo $brg->kategori_brg ?>" data-nama_brg="<?php echo $brg->nama_brg ?>" data-hrg_beli="<?php echo $brg->hrg_beli ?>" data-hrg_jual="<?php echo $brg->hrg_jual ?>" data-laba="<?php echo $brg->laba ?>" data-stok_brg="<?php echo $brg->stok_brg ?>" data-keterangan="<?php echo $brg->keterangan ?>" data-foto_brg="<?php echo $brg->foto_brg ?>">
                        <button class="btn btn-primary">
                          <i class="fas fa-plus"></i> RUSAK</button></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /TABEL DATATABLES-->
        </div>
      </div>
    </div>
    <!-- END CARD -->
  </div>
</div>

<!-- MODAL BELI -->
<div class="modal fade bd-example-modal-lg" data-backdrop="static" name="modal_edit" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <strong id="exampleModalLabel" class="modal-title"><i class="fas fa-trash mr-2"></i> BARANG RUSAK</strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- MODAL FORM -->
        <form class="form-validate" method="post" action="<?php echo base_url() . 'admin/data_rusak/tambah_aksi'; ?>" enctype="multipart/form-data">
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-3 col-form-label">Kategori</label>
            <div class="col-sm-8">
              <input type="text" name="kategori_brg" id="kategori_brg" class="form-control" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-3 col-form-label">Nama Barang</label>
            <div class="col-sm-8">
              <input type="text" name="nama_brg" id="nama_brg" class="form-control" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-8">
              <input type="text" name="harga_beli" id="hrg_beli" class="form-control" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah</label>
            <div class="col-sm-8">
              <input type="number" name="jumlah_rusak" id="jumlah_beli" class="form-control numeric" required data-msg="Harap masukan Jumlah pembelian barang.">
            </div>
          </div>
          <div class="form-group row">
            <label for="colFormLabel" class="col-sm-3 col-form-label">Total Harga</label>
            <div class="col-sm-8">
              <input type="number" name="total_harga" id="total_harga" class="form-control" required data-msg="Total harga akan terisi otomatis sesuai dengan jumlah pembelian" readonly>
            </div>
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-info name=" edit" value="SIMPAN">
            <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
          </div>
        </form>
        <!-- END MODAL FORM -->
      </div>
    </div>
  </div>
</div>
<!-- END MODAL BELI -->


<!-- MODAL DETAIL BARANG -->
<div class="modal fade bd-example-modal-lg" name="modal_info" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <strong id="exampleModalLabel" class="modal-title"><i class="fas fa-info mr-2"></i> INFO BARANG</strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- MODAL FORM -->
        <form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>" enctype="multipart/form-data">
          <table class="table table-borderless">
            <tr>
              <td align="center" justify="center">
                <div class="mt-5">
                  <img src="" width="250" id="foto_brg">
                </div>
              </td>
              <td>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">Nama Barang</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_brg" id="nama_brg" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">Supplier</label>
                  <div class="col-sm-8">
                    <input type="text" name="nama_supplier" id="nama_supplier" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">Kategori</label>
                  <div class="col-sm-8">
                    <input type="text" name="kategori_brg" id="kategori_brg" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Harga Beli</label>
                  <div class="col-sm-8">
                    <input type="text" name="hrg_beli" id="hrg_beli" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Harga Jual</label>
                  <div class="col-sm-8">
                    <input type="text" name="hrg_jual" id="hrg_jual" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Laba</label>
                  <div class="col-sm-8">
                    <input type="text" name="laba" id="laba" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="colFormLabel" class="col-sm-4 col-form-label">Stok</label>
                  <div class="col-sm-8">
                    <input type="text" name="stok_brg" id="stok_brg" class="form-control form-control-plaintext" readonly>
                  </div>
                </div>
              </td>
            </tr>
          </table>
          <div class="form-group">
            <label for="colFormLabel" class="col-sm-3 col-form-label font-weight-bold">KETERANGAN :</label>
            <div class="col-sm-12">
              <textarea class="form-control form-control-plaintext" name='keterangan' id="keterangan" rows="5" readonly></textarea>
            </div>
          </div>
        </form>
        <!-- END MODAL FORM -->
      </div>
    </div>
  </div>
</div>
<!-- END MODAL DETAIL BARANG -->


<!-- SCRIPT -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
  $(document).on("click", "#edit_brg", function() {
    var no_brg = $(this).data('no_brg');
    var nama_supplier = $(this).data('nama_supplier');
    var kategori_brg = $(this).data('kategori_brg');
    var nama_brg = $(this).data('nama_brg');
    var hrg_beli = $(this).data('hrg_beli');
    var stok_brg = $(this).data('stok_brg');

    $("#modal_edit #no_brg").val(no_brg);
    $("#modal_edit #nama_supplier").val(nama_supplier);
    $("#modal_edit #kategori_brg").val(kategori_brg);
    $("#modal_edit #nama_brg").val(nama_brg);
    $("#modal_edit #hrg_beli").val(hrg_beli);
    $("#modal_edit #stok_brg").val(stok_brg);
  })

  $(document).on("click", "#info_brg", function() {
    var no_brg = $(this).data('no_brg');
    var nama_supplier = $(this).data('nama_supplier');
    var kategori_brg = $(this).data('kategori_brg');
    var nama_brg = $(this).data('nama_brg');
    var hrg_beli = $(this).data('hrg_beli');
    var hrg_jual = $(this).data('hrg_jual');
    var laba = $(this).data('laba');
    var stok_brg = $(this).data('stok_brg');
    var keterangan = $(this).data('keterangan');
    var foto_brg = $(this).data('foto_brg');

    $("#modal_info #no_brg").val(no_brg);
    $("#modal_info #nama_supplier").val(nama_supplier);
    $("#modal_info #kategori_brg").val(kategori_brg);
    $("#modal_info #nama_brg").val(nama_brg);
    $("#modal_info #hrg_beli").val(hrg_beli);
    $("#modal_info #hrg_jual").val(hrg_jual);
    $("#modal_info #laba").val(laba);
    $("#modal_info #stok_brg").val(stok_brg);
    $("#modal_info #keterangan").val(keterangan);
    $("#modal_info #foto_brg").attr("src", "http://localhost/CCbjm/uploads/" + foto_brg);
  })
</script>
<!-- END SCRIPT -->

<!-- SCRIPT PERHITUNGAN LABA -->
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript">
  $("#modal_edit #jumlah_beli").keyup(function() {
    var a = parseFloat($("#modal_edit #jumlah_beli").val());
    var b = parseFloat($("#modal_edit #hrg_beli").val());
    var c = a * b;
    $("#modal_edit #total_harga").val(c);
  });
</script>
<!-- END SCRIPT PERHITUNGAN LABA -->