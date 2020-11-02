<!-- GET DATA CHART-->
<?php 
foreach ($kerugian as $k => $v) {
$arrProd[]=['label'=>$v->tgl_detail, 'y'=> $v->total_harga];
}
?>
<!-- /.END GET DATA CHART-->

<!-- SCRIPT CHART-->
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "dark1",
    title:{
        text: ""
    },
    axisX:{
        valueFormatString: "DD MMM",
        crosshair: {
            enabled: true,
            snapToDataPoint: true
        }
    },
    axisY: {
        title: "",
        includeZero: true,
        valueFormatString: "Rp #,###,###",
        crosshair: {
            enabled: true,
            snapToDataPoint: true,
            labelFormatter: function(e) {
                return "Rp" + CanvasJS.formatNumber(e.value, "#,###,###");
            }
        }
    },
    data: [{
        type: "area",
        xValueFormatString: "DD MMM",
        yValueFormatString: "Rp #,###,###",
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


<div class="card w-110 mt-3" style="height: 45rem;">
  <h1 class="card-header text-oren"><i class="fas fa-chart-area"></i> Statistik Kerugian :</h1>  
  <div class="card-body">
    <!-- CARI Data -->
    <form class="form-validate" method="get" action="<?php echo base_url(). 'admin/report/total_kerugian_tgl';
    ?>">
        <div class="form-row">
        <div class="col-2">
         <input type="date" name="tgl_awal" id="tgl_awal" class="form-control" required data-msg="Mohon Masukan Tanggal Awal." required>
        </div>
        <label for="colFormLabel" class="col-form-label">Sampai</label>
        <div class="col-2">
         <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" required data-msg="Mohon Masukan Tanggal Akhir." required>
        </div>
        <button type="submit" name="search" class="btn btn-primary ml-3">OK</button>
        </div>
    </form>
    <!-- END CARI Data -->
    <button class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Print Data</button>
    <br>
    <br>
    <div id="chartContainer" style="height: 90%; width: 100%;"></div>
  </div>
</div>

</div>
</div>

<!--Modal Print-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CETAK DATA KEUNTUNGAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<a class="btn btn-primary mb-3" href="<?php echo base_url(). 'admin/report/total_kerugian_print';?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print Seluruh Data Kerugian</a> 
<br>
<p>
-- Atau --
</p>
    <!-- CARI Data -->
    <form class="form-validate" method="get" action="<?php echo base_url(). 'admin/report/total_kerugian_print_tgl';
    ?>" target="_blank" rel="nofollow">

        <div class="form-row">
        <div class="col-4">
         <input type="date" name="tgl_awal" id="tgl_awal" class="form-control" required data-msg="Mohon Masukan Tanggal Awal." required>
        </div>
        <label for="colFormLabel" class="col-form-label">Sampai</label>
        <div class="col-4">
         <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" required data-msg="Mohon Masukan Tanggal Akhir." required>
        </div>
        <button type="submit" class="btn btn-primary ml-3"><i class="fas fa-print"></i> Print</button>
        </div>
    </form>
    <!-- END CARI Data -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
<!-- END MODAL PRINT-->


