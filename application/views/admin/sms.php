<div class="page-content">
  <div class="container-fluid">
    <!-- CARD -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <div class="card mt-3">
            <h1 class="card-header text-oren"><i class="fas fa-plus"></i> SMS Getway</h1>
            <div class="card-body">
              <!-- FORM -->
              <form class="form-validate" action="<?php echo base_url() . 'admin/dashboard/kirimsms'; ?>" method="post">
                <div class="form-group row">
                  <label class="col-sm-1 form-label">Ke :</label>
                  <div class="col-sm-9">
                    <input id="tujuan" name="tujuan" type="text" placeholder="No HP Tujuan" value="" class="form-control form-control-success" required data-msg="Harap Masukan Nomor Tujuan"><small class="form-text">Masukan No.HP Tujuan.</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-1 form-label">Pesan : </label>
                  <div class="col-sm-9">
                    <textarea id="pesan" name="pesan" rows="5" required data-msg="Pesan tidak boleh kosong." placeholder="Isi Pesan" class="form-control form-control-success"></textarea><small class="form-text">Silahkan isi Pesan.</small>
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-sm-11 ml-auto">
                    <button type="submit" class="btn btn-primary"> KIRIM</button>
                  </div>
                </div>
              </form>
              <!-- End FORM -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END CARD -->
  </div>
</div>