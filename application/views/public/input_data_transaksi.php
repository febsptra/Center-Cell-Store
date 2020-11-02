<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">

      <!-- CARD -->
      <div class="card mt-3 mb-5">
        <div class="card-body">
          <h1 class="card-title">
            <span class="badge badge-primary"><i class="fas fa-cart-arrow-down"></i>
              isi Data Transaksi :</span>
          </h1>
          <div class="title">
            <span class="d-block">Data diambil berdasarkan profile pengguna, Silahkan Edit jika ada perubahan.</span></div>
          <br>
          <!-- FORM -->
          <form class="form-validate" action="<?php echo base_url() . 'penjualan/isi_data'; ?>" method="post">

            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <label>Kode Transaksi</label>
                  <input name="kode_transaksi" type="text" value="TRS-<?php echo random_string('numeric', 6); ?>" required data-msg="Silahkan Refresh halaman untuk mendapatkan kode transaksi baru" class="form-control" readonly>
                  <input type="hidden" name="username" class="form-control" value="<?php echo $this->session->userdata('username') ?>">
                  <input type="hidden" name="jumlah_pembayaran" class="form-control mt-2" value="<?php echo ($this->cart->total()) ?>">
                  <input type="hidden" name="status_pembayaran" class="form-control form-control-sm">
                </div>
              </div>
              <div class="col-lg-7">
                <!--Kosong-->
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Nama Toko</label>
                  <input id="nama_toko" name="nama_toko" value="<?php echo $this->session->userdata('nama_toko') ?>" type="text" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Nama Pemilik Toko</label>
                  <input id="nama_pemilik" name="nama_pemilik" value="<?php echo $this->session->userdata('nama_pemilik') ?>" type="text" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="form-group">
                  <label>Alamat</label>
                  <input id="alamat" name="alamat" value="<?php echo $this->session->userdata('alamat') ?>" type="text" class="form-control" required>
                  <small id="harus_lengkap" class="form-text text-danger">
                    Harap isi Alamat dengan Lengkap agar tidak terjadi kesalahan saat pengiriman!
                  </small>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label>Kota</label>
                  <select class="custom-select" name="kota" id="kota" required data-msg="Mohon pilih jabatan">
                    <option selected><?php echo $this->session->userdata('kota') ?></option>
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
            </div>

            <div class="form-group">
              <label>Nomor HP</label>
              <input name="no_hp" type="number" value="<?php echo $this->session->userdata('no_hp') ?>" class="form-control" required>
              <small id="harus_lengkap" class="form-text text-danger">
                <b>PENTING!</b> Harap masukan nomor HP/WA yang aktif atau dapat dihubungi Jika ada kesalahan saat transaksi !
              </small>
            </div>


            <p class="text-right"><button type="submit" class="btn btn-primary mt-3">Lanjut ke Pembayaran</button>
          </form>
          <!-- End FORM -->

        </div>
      </div>




    </div>