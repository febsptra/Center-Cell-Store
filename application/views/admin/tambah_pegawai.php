<div class="page-content">
  <div class="container-fluid">
    <!-- Navigasi -->
    <div class="container-fluid">
      <a type="button" class="btn btn-primary mt-4" href="<?php echo base_url('admin/data_pegawai/') ?>">Data Pegawai</a>
      <button type="button" class="btn btn-secondary mt-4 ml-2"><i class="fas fa-plus"></i> Tambah Data</button>
    </div>
    <!-- end navigasi -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <!-- BLOK -->
          <div class="card mt-3">
            <h1 class="card-header text-oren">
              <i class="fas fa-plus"></i> Tambah Pegawai
            </h1>
            <div class="card-body">
              <!-- FORM -->
              <form class="form-validate" action="<?php echo base_url() . 'admin/data_pegawai/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="form-group">
                      <label>Username</label>
                      <input name="id_pegawai" type="text" required data-msg="Username masih kosong" data-rule-minlength="8" data-msg-minlength="Minimal username 8 Karakter" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="form-group">
                      <label>Email</label>
                      <input name="email" type="email" required data-msg="Mohon masukan format email dengan benar, menggunakan " @"" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Password</label>
                      <input id="password" name="password" type="password" required data-msg="Password masih kosong" data-rule-minlength="5" data-msg-minlength="Minimal Password 5 Karakter" class="form-control">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label>Konfirmasi Password</label>
                      <input id="form2-password2" name="cek" type="password" required data-msg="Mohon Konfirmasi password" data-rule-equalto="#password" data-msg-equalto="Password tidak cocok." class="form-control">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input name="nama_lengkap" type="text" required data-msg="Mohon masukan Nama Lengkap" class="form-control">
                </div>
                <div class="form-group">
                  <label>Alamat lengkap</label>
                  <input name="alamat" type="text" required data-msg="Mohon masukan Alamat lengkap" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nomor HP</label>
                  <input name="no_hp" type="number" required data-msg="Nomor HP masih kosong" data-rule-minlength="11" data-msg-minlength="Minimal Nomor HP 11 digit" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <select class="custom-select" name="jabatan" id="inputGroupSelect01" required data-msg="Mohon pilih jabatan">
                    <option selected>Pilih Jabatan</option>
                    <option value="Admin">Admin</option>
                    <option value="Gudang">Gudang</option>
                    <option value="Supervisor">Supervisor</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label mt-2">Foto Pegawai</label>
                  <div class="col-sm-9">
                    <input type="file" name="foto" class="form-control-file mt-2" required data-msg="Mohon upload Foto Pegawai">
                  </div>
                </div>
                <p class="text-right"><button type="submit" class="btn btn-primary mt-3"> SIMPAN</button>
                  <a class="btn btn-secondary ml-2 mt-3" href="<?php echo base_url('admin/data_pegawai') ?>" role="button">Batal</a></p>
              </form>
              <!-- End FORM -->
            </div>
          </div>
          <!-- END CARD -->
        </div>
      </div>
    </div>
  </div>
</div>