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
    <h3><b>DATA PENJUALAN</b></h3>
    <?php
    $tgl_awal  = $this->input->get('tgl_awal', TRUE);
    $tgl_akhir = $this->input->get('tgl_akhir', TRUE); ?>
    Dari tanggal : <?php echo dateindo($tgl_awal) ?> - Sampai - <?php echo dateindo($tgl_akhir) ?>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Kode Transaksi</th>
          <th>Tanggal Transaksi</th>
          <th>Nama Toko</th>
          <th>Total</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($penjualan_dibayar as $dibayar) : ?>
          <tr>

            <td><?php echo $no++ ?> </td>
            <td width="15%"><?php echo $dibayar->kode_transaksi ?> </td>
            <td><?php echo dateindo($dibayar->tgl_pembayaran) ?> </td>
            <td><?php echo $dibayar->nama_toko ?> </td>
            <td>Rp <?php echo number_format($dibayar->jumlah_pembayaran, 0, ',', '.') ?> </td>
            <td><?php echo $dibayar->status_pembayaran ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

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