<?php  
  header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/vnd.ms-excel");
    header ("Content-Disposition: attachment; filename=Total_asset_Center_Cell");
?>

<style type="text/css">
  table,th,td{
    border-collapse: collapse;
    padding: 15px;
    margin: 10px;
    color: #000;
  }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/sb-admin-4.css">

<div style="text-align: center;">
<span style="margin-left: 20px;font-size: 50px; font-family: Berlin Sans FB Demi; "><b>Data Total Asset Center Cell Accessoris BJM</b></span>
</div>
<br>
<div>
<table class="table" border="1">
      <thead>
        <tr>
          <th>No</th>
          <th colspan="3">Nama Barang</th>
          <th>Kategori</th>
          <th>Harga</th>
          <th>Jumlah</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
       <?php 
        $no=1;
        $x=4;
        $z=4;
        foreach($barang as $brg) : ?>   
          <tr>
            <td><?php echo $no++ ?></td>
            <td colspan="3"><?php echo $brg->nama_brg ?> </td>
            <td><?php echo $brg->kategori_brg ?> </td>
            <td><?php echo ($brg->hrg_jual) ?> </td>
            <td><?php echo $brg->stok_brg ?> </td>
            <td>=G<?php echo $x++ ?>*F<?php echo $z++ ?> </td>
            </td>
          </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="6"></td>
            <td>Total :</td> 
            <td><b>=SUM()</b></td> 
        </tr>
        </tbody>
</table>
</div>