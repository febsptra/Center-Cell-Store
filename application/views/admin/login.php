<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN ADMIN</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Custom Font Icons CSS-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font.css">
  <!-- Google fonts - Muli-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.default.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico">
</head>

<div class="login-page">
  <div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
      <div class="row">
        <!-- Logo & Information Panel-->
        <div class="col-lg-6">
          <div class="info d-flex align-items-center">
            <div class="content">
              <div class="logo">
                <h1>Center Cell</h1>
              </div>
              <p>Silahkan Login menggunakan id/username dan password yang sudah diberikan.</p>
            </div>
          </div>
        </div>
        <!-- Form Panel    -->
        <div class="col-lg-6">
          <div class="form d-flex align-items-center">
            <div class="content">
              <form action="<?php echo base_url('admin/login/masuk') ?>" method="post" class="form-validate mb-4">
                <?php echo $this->session->flashdata('pesan') ?>
                <div class="form-group">
                  <input id="id_pegawai" type="text" name="id_pegawai" required data-msg="Harap isi username" class="input-material">
                  <label for="login-username" class="label-material">User Name</label>
                </div>
                <div class="form-group">
                  <input id="password" type="password" name="password" required data-msg="Harap masukan password" class="input-material">
                  <label for="login-password" class="label-material">Password</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>