<!-- GET DATA CHART-->
<?php
$this->db->order_by('bp', 'DESC');
$this->db->select('*');
$dataProdukChart = $this->db->get("barang")->result();
foreach ($dataProdukChart as $k => $v) {
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
      }]
    });
    chart.render();

  }
</script>
<!-- /.END CHART-->

<div class="page-content">
  <div class="container-fluid">


    <div class="card w-100 mt-3" style="height: 45rem;">
      <div class="card-body">
        <h3 class="card-title">Barang Paling Banyak Terjual :</h3>
        <div id="chartContainer" style="height: 95%; width: 100%;"></div>
      </div>
    </div>

  </div>
</div>