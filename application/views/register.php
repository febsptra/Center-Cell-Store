<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DAFTAR</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Carme&display=swap" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-3.css" rel="stylesheet">

</head>



<div class="container align-items-center">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden my-5">
        <h1 class="card-header text-center text-primary"><i class="fas fa-users"></i><STRONG> DAFTAR AKUN</STRONG></h1>
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">

            <div class="col-lg-12">
              <div class="p-5">
                <div class="text-center">

                </div>
                <br>
                <form class="form-validate" action="<?php echo base_url() . 'auth/register';
                                                    ?>" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-3">
                      <label>Nama Toko</label>
                      <input type="text" class="form-control" id="nama_toko" name="nama_toko" required data-msg="Nama Toko masih kosong">
                    </div>
                    <div class="col-sm-6">
                      <label>Nama Pemilik Toko</label>
                      <input type="text" class="form-control" id="nama_pemilik" name="nama_pemilik" required data-msg="Nama Pemilik Toko masih kosong">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-5 mb-3 mb-sm-3">
                      <label>Username</label>
                      <input type="text" class="form-control" id="username" name="username" required data-msg="Username masih kosong" data-rule-minlength="5" data-msg-minlength="Minimal username 5 Karakter">
                      <?php echo form_error('username', '<div class="text-danger small">', '</div>') ?>
                    </div>
                    <div class="col-sm-7">
                      <label>Email</label>
                      <input id="email" name="email" type="email" required data-msg="Mohon masukan format email dengan benar" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3">
                      <label>Password</label>
                      <input id="password" name="password" type="password" required data-msg="Password masih kosong" data-rule-minlength="5" data-msg-minlength="Minimal Password 5 Karakter" class="form-control">
                    </div>
                    <div class="col-sm-6 mb-3">
                      <label>Ulangi Password</label>
                      <input id="Ulangi_password" name="Ulangi_password" type="password" required data-msg="Mohon Konfirmasi password" data-rule-equalto="#password" data-msg-equalto="Password tidak cocok." class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-8 mb-3 mb-sm-3">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat" required data-msg="Alamat masih kosong" data-rule-minlength="8" data-msg-minlength="Harap masukan alamat secara lengkap">
                      <small id="harus_lengkap" class="form-text text-danger text-muted">
                        Silahkan isi dengan alamat lengkap toko!
                      </small>
                    </div>
                    <div class="col-sm-4">
                      <label>Kota</label>
                      <select class="custom-select" name="kota" id="kota" required data-msg="Silahkan pilih Kota" placeholder="--Pilih Kota--">
                        <option selected></option>
                        <option value="Amuntai">Amuntai</option>
                        <option value="Banjarbaru">Banjarbaru</option>
                        <option value="Batulicin">Batulicin</option>
                        <option value="Balangan">Balangan</option>
                        <option value="Barabai">Barabai</option>
                        <option value="Kotabaru">Kotabaru</option>
                        <option value="Kandangan">Kandangan</option>
                        <option value="Martapura">Martapura</option>
                        <option value="Pelaihari">Pelaihari</option>
                        <option value="Tanjung">Tanjung</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>No HP</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" required data-msg="Nomor HP masih kosong" data-rule-minlength="11" data-msg-minlength="Minimal Nomor HP 11 digit">
                    <small id="harus_lengkap" class="form-text text-danger text-muted">
                      Silahkan isi dengan nomor telp/WA toko atau pemilik toko yang bisa dihubungi!
                    </small>
                  </div>

                  <div class="form-group">
                    <label>Foto Pemilik Toko</label>
                    <input type="file" class="form-control-file" id="foto" name="foto" required data-msg="Mohon upload Foto">
                    <small id="harus_lengkap" class="form-text text-danger text-muted">
                      <p class="text-danger">*Foto akan digunakan sebagai foto profil akun! Wajib isi!</p>
                    </small>
                  </div>

                  <br>
                  <button type="submit" class="btn btn-primary btn-block mt-3">DAFTAR</button>
                  <hr>
                </form>
                <div class="text-center">
                  <a class="small" href="login">Sudah punya akun? Silahkan Login!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>