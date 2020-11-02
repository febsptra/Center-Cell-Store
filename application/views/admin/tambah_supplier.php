<div class="page-content">
  <div class="container-fluid">

    <!-- Navigasi -->
    <div class="container-fluid">
      <a type="button" class="btn btn-primary mt-4" href="<?php echo base_url('admin/data_supplier/') ?>">Data supplier</a>
      <button type="button" class="btn btn-secondary mt-4 ml-2"><i class="fas fa-plus"></i> Tambah Data</button>
    </div>
    <!-- end navigasi -->

    <!-- CARD -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <div class="card mt-3">
            <h1 class="card-header text-oren"><i class="fas fa-plus"></i> Tambah Supplier</h1>
            <div class="card-body">
              <!-- FORM -->
              <form class="form-validate" action="<?php echo base_url() . 'admin/data_supplier/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label class="col-sm-2 form-label">Kode Supplier</label>
                  <div class="col-sm-9">
                    <input id="kode_supplier" name="kode_supplier" type="text" placeholder="Kode Supplier" value="SUPP-<?php echo random_string('numeric', 5); ?>" class="form-control form-control-success" readonly><small class="form-text">Kode di acak secara random menggunakan Randong String.</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-label">Nama Supplier</label>
                  <div class="col-sm-9">
                    <input id="nama_supplier" name="nama_supplier" type="text" required data-msg="Nama Supplier masih kosong." placeholder="Nama Supplier" class="form-control form-control-success"><small class="form-text">Masukan nama toko atau pemilik toko supplier.</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-label">Alamat</label>
                  <div class="col-sm-9">
                    <input id="alamat" name="alamat" type="text" required data-msg="Alamat Supplier masih kosong." placeholder="Alamat" class="form-control form-control-success"><small class="form-text">Harap masukan alamat selengkap-lengkapnya.</small>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-label">Nomor HP/WA</label>
                  <div class="col-sm-9">
                    <input id="no_hp" name="no_hp" type="number" required data-msg="Nomor HP/WA Supplier masih kosong." data-rule-minlength="11" data-msg-minlength="Minimal Nomor HP/WA 11 digit" placeholder="Nomor HP / WA" class="form-control form-control-success">
                  </div>
                </div>
                <br>
                <div class="form-group row">
                  <div class="col-sm-10 ml-auto">
                    <button type="submit" class="btn btn-primary"> SIMPAN</button>
                    <a class="btn btn-secondary ml-2" href="<?php echo base_url('admin/data_supplier') ?>" role="button">Batal</a>
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