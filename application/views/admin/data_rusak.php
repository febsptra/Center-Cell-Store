<div class="page-content">
  <div class="container-fluid">

    <!-- Navigasi -->
    <div class="container-fluid">
      <button type="button" class="btn btn-primary mt-4">Data Barang Rusak</button>
      <a type="button" class="btn btn-secondary mt-4 ml-2" href="<?php echo base_url('admin/data_rusak/tambah_rusak/') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
    </div>
    <!-- end navigasi -->

    <!-- CARD -->
    <div class="container-fluid">
      <div class="card mt-3">
        <div class="card-header">
          <h1 class="text-oren"><i class="fas fa-trash"></i> Data Barang Rusak</h1>
        </div>
        <div class="card-body">
          <br>
          <!-- TABEL DATATABLES-->
          <div class="table-responsive">
            <table id="datatable1" style="width: 100%;" class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Kategori</th>
                  <th>Nama Barang</th>
                  <th>Harga Beli</th>
                  <th>Jumlah Rusak</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($rusak as $rk) : ?>
                  <tr>
                    <td><?php echo $no++ ?> </td>
                    <td><?php echo $rk->kategori_brg ?> </td>
                    <td><?php echo $rk->nama_brg ?> </td>
                    <td><?php echo rupiah($rk->harga_beli) ?> </td>
                    <td align="center"><?php echo $rk->jumlah_rusak ?> </td>
                    <td><?php echo rupiah($rk->total_harga) ?> </td>
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