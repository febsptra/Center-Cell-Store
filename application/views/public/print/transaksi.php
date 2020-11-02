<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/sb-admin-4.css">
    <link href="https://fonts.googleapis.com/css2?family=Carme&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card border-bottom-dark text-center">
            <div class="card-body">
                <h3><b>CENTER CELL ACCESSORIES</b></h3>
                Komp.Banjar Indah Permai Jl.Kasturi Raya No.14<br>
                Email : centercellbjm@gmail.com | NO.HP / WA : 081351339559
            </div>
        </div>
        <br>
        <?php foreach ($penjualan_dibayar as $pnj) : ?>
            <div class="row">
                <div class="col-12 col-md-6">
                    <h5 class="text-uppercase"><strong class="text-dark">ATAS NAMA/TOKO : </strong></h5>
                    <p class="mb-4 text-dark">
                        <strong class="text-dark"><?php echo ($pnj->nama_toko) ?></strong><br>
                        <?php echo ($pnj->alamat) ?><br>
                        <?php echo ($pnj->kota) ?><br>
                        <?php echo ($pnj->no_hp) ?></p>
                    <h5 class="text-uppercase"><strong class="text-dark">KODE TRANSAKSI : <?php echo ($pnj->kode_transaksi) ?></strong></h5>
                    <p class="mb-4 text-dark">Total Tagihan : <?php echo number_format($pnj->jumlah_pembayaran, 0, ',', '.') ?>
                        <br>Tgl Transaksi : <?php echo dateindo($pnj->tgl_pembayaran) ?>
                        <br>Status : <?php echo ($pnj->status_pembayaran) ?>
                    </p>
                </div>
            <?php endforeach; ?>
            <table class="table mr-3 table table-hover table-bordered">
                <thead>
                    <tr class="table-head">
                        <th class="text-center">#</th>
                        <th>Nama barang</th>
                        <th>Harga</th>
                        <th class="text-center">Jumlah</th>
                        <th>Total Hrg</th>
                    </tr>
                </thead>
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
                    <td colspan="2"></td>
                    <td align="right">Total :</td>
                    <td width="250">
                        <b>Rp <?php echo number_format($pnj->jumlah_pembayaran, 0, ',', '.') ?></b>
                    </td>
                </tr>
            </table>
            </div>
    </div>
    </div>
    <div class="w3-right footer"></div>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/print/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/print/printThis.js"></script>
    <script type="text/javascript">
        $('.container').printThis({
            debug: false, // show the iframe for debugging
            importCSS: true, // import parent page css
            importStyle: false, // import style tags
            printContainer: true, // print outer container/$.selector
            loadCSS: "file:///C:/xampp/htdocs/CCbjm/assets/css/sb-admin-4.css", // path to additional css file - use an array [] for multiple
            pageTitle: "Riwayat Transaksi", // add title to print page
            removeInline: false, // remove inline styles from print elements
            removeInlineSelector: "*", // custom selectors to filter inline styles. removeInline must be true
            printDelay: 333, // variable print delay
            header: null, // prefix to html
            footer: null, // postfix to html
            base: false, // preserve the BASE tag or accept a string for the URL
            formValues: true, // preserve input/form values
            canvas: false, // copy canvas content
            doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
            removeScripts: false, // remove script tags from print content
            copyTagClasses: false, // copy classes from the html & body tag
            beforePrintEvent: null, // callback function for printEvent in iframe
            beforePrint: null, // function called before iframe is filled
            afterPrint: null //
        });
    </script>
</body>

</html>