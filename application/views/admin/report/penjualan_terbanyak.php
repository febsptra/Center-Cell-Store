<!-- GET DATA CHART-->
<?php
foreach ($barang as $k => $v) {
  $arrProd[] = ['label' => $v->nama_brg, 'y' => $v->bp];
}
?>
<!-- /.END GET DATA CHART-->

<!-- SCRIPT CHART-->
<script>
  window.onload = function() {

    var chart = new CanvasJS.Chart("chartContainer", {
      animationEnabled: true,
      theme: "dark1", // "light1", "light2", "dark1", "dark2"
      title: {
        text: ""
      },
      axisY: {
        title: ""
      },
      data: [{
        type: "column",
        showInLegend: false,
        legendMarkerColor: "grey",
        legendText: "",
        dataPoints: <?= json_encode($arrProd, JSON_NUMERIC_CHECK); ?>
        //Contoh Data
        //[
        //{ label: "India", y: 7.1 }, 
        //{ label: "China", y: 6.70 },    
        //{ label: "Indonesia", y: 5.00 },
        //{ label: "Australia", y: 2.50 },    
        //{ label: "Mexico", y: 2.30 },
        //{ label: "UK", y: 1.80 },
        //{ label: "United States", y: 1.60 },
        //{ label: "Japan", y: 1.60 }
        //]
      }]
    });
    chart.render();

  }
</script>
<!-- /.END CHART-->

<div class="page-content">
  <div class="container-fluid">
    <div class="card w-100 mt-3" style="height: 50rem;">
      <h1 class="card-header text-primary">Barang Paling Banyak Terjual :</h1>
      <div class="card-body">
        <p>
          <a class="btn btn-primary float-right mb-5" href="<?php echo base_url() . 'admin/report/penjualan_terbanyak_print'; ?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print Data</a>
        </p>
        <br>
        <div id="chartContainer" style="height: 90%; width: 100%;"></div>
      </div>
    </div>

  </div>
</div>