<!-- GET DATA CHART-->
<?php 
// $this->db->order_by('stok_brg', 'ASC');
// $this->db->select('*');
// $dataProdukChart = $this->db->get("barang")->result();
foreach ($barang as $k => $v) {
  $arrProd[]=['label'=>$v->nama_brg, 'y'=> $v->stok_brg];
}
?>
<!-- /.END GET DATA CHART-->

<!-- SCRIPT CHART-->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light1", // "light1", "light2", "dark1", "dark2"
    title:{
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
        dataPoints: 
        <?=json_encode($arrProd, JSON_NUMERIC_CHECK);?>
    }]
});
chart.render();

}
</script>
<!-- /.END CHART-->

<div class="page-content">
<div class="container-fluid">


<div class="card w-100 mt-3" style="height: 50rem;">
  <div class="card-body">
    <h1 class="card-title text-warning">Statistik Stok Barang :</h1>
    <a class="btn btn-primary float-right mb-3" href="<?php echo base_url(). 'admin/report/print_stok_barang';?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print Data Stok Barang</a> 
    <br>
    <br>
    <div id="chartContainer" style="height: 90%; width: 100%;"></div>
  </div>
</div>

</div>
</div>




