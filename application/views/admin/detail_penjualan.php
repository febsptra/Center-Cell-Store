<div class="page-content">
    <div class="container-fluid">
        <div class="card mt-4 ml-2">
            <div class="card-body p-5">
                <?php foreach ($penjualan_dibayar as $pnj) : ?>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h5 class="text-uppercase"><strong class="text-gray-light">ATAS NAMA/TOKO : </strong></h5>
                            <p class="mb-4">
                                <strong class="text-gray-light"><?php echo ($pnj->nama_toko) ?></strong><br>
                                <?php echo ($pnj->alamat) ?><br>
                                <?php echo ($pnj->kota) ?><br>
                                <?php echo ($pnj->no_hp) ?></p>
                            <h5 class="text-uppercase"><strong class="text-gray-light">KODE TRANSAKSI : <?php echo ($pnj->kode_transaksi) ?></strong></h5>
                            <p class="mb-4">Status : <?php echo ($pnj->status_pembayaran) ?></p>
                        </div>
                        <div class="col-12 col-md-6 text-md-right">
                            <h5 class="text-uppercase"><strong class="text-gray-light">TANGGAL TRANSAKSI</strong></h5>
                            <p class="mb-4"><?php echo dateindo($pnj->tgl_pembayaran) ?></p>
                        </div>
                    <?php endforeach; ?>
                    <table class="table mr-3 table  table-bordered">
                        <tr class="table-head">
                            <th class="text-center">#</th>
                            <th>Nama barang</th>
                            <th>Harga</th>
                            <th class="text-center">Jumlah</th>
                            <th>Total Hrg</th>
                        </tr>
                        <?php
                        $no = 1;
                        foreach ($detail_penjualan as $detail_penjualan) : ?>
                            <tr class="table-row">
                                <td align="center"><?php echo $no++ ?> </td>
                                <td><?php echo $detail_penjualan->nama_brg ?> </td>
                                <td>Rp <?php echo number_format($detail_penjualan->hrg_jual, 0, ',', '.') ?> </td>
                                <td align="center"><?php echo $detail_penjualan->jumlah_jual ?> </td>
                                <td>Rp <?php echo number_format($detail_penjualan->total_harga, 0, ',', '.') ?> </td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td></td>
                            <td colspan="3">
                            </td>
                            <td width="250">
                                <div class="p-3 mb-2 bg-primary text-white">
                                    Rp <?php echo number_format($pnj->jumlah_pembayaran, 0, ',', '.') ?></div>
                            </td>
                        </tr>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>