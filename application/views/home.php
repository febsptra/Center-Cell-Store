<section>
  <div class="container-fluid">
    <?php echo $this->session->flashdata('tambah_keranjang_sukses') ?>
    <div class="row">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div class="card border-secondary text-center mt-3">
          <h2 class="card-header text-left text-primary"><b><i class="fas fa-medal"></i> Promo Minggu ini</b></h2>
          <div class="card-body">
            <div class="row text-left">
              <?php foreach ($diskon as $brg) : ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                  <div class="card mb-3">
                    <?php echo form_open(base_url('home/tambah_keranjang'));
                    echo form_hidden('id', $brg->stok_brg);
                    echo form_hidden('qty', 1);
                    echo form_hidden('price', $brg->hrg_jual);
                    echo form_hidden('coupon', $brg->laba);
                    echo form_hidden('name', $brg->nama_brg); ?>
                    <img src="<?php echo base_url() . 'uploads/' . $brg->foto_brg ?>" alt="Image 1063" class="card-img"></a>
                    <div class="card-body">
                      <h6 class="card-title mb-0 mt-1 mb-2 text-left"><?php echo word_limiter($brg->nama_brg, 5, '....'); ?></h6>
                      <b class="text-danger text-left">Dikon <?php echo $brg->diskon; ?>%</b>
                      <br><del><?php echo rupiah($brg->hrg_sblm_diskon); ?></del></strong>
                      <h3 class="text-danger"><strong><?php echo rupiah($brg->hrg_jual) ?></strong></h3>
                      <?php if ($this->session->userdata('username')) { ?>
                        <button class="btn btn-danger btn-sm mb-2" type="submit"><i class="fas fa-cart-plus"></i> Keranjang</button>
                      <?php } else { ?>
                        <a class="btn btn-danger btn-sm mb-2" href="" data-toggle="modal" data-target="#loginModal"><i class="fas fa-cart-plus"></i> Keranjang</a>
                      <?php } ?>
                      <?php echo anchor('home/detail/' . $brg->no_brg, '<div class="btn btn-primary btn-sm mb-2"><i class="fas fa-angle-right"></i> Detail</div>') ?>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="card text-center border-primary mt-3">
          <div class="card-body">
            <div class="alert alert-primary text-left" role="alert">
              <b><i class="fas fa-rss"></i> Barang Terbaru dari Center Cell</b>
            </div>
            <div class="row text-center">
              <?php foreach ($barang as $brg) : ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                  <div class="card mb-3">
                    <?php echo form_open(base_url('home/tambah_keranjang'));
                    echo form_hidden('id', $brg->stok_brg);
                    echo form_hidden('qty', 1);
                    echo form_hidden('price', $brg->hrg_jual);
                    echo form_hidden('coupon', $brg->laba);
                    echo form_hidden('name', $brg->nama_brg);
                    ?>
                    <img src="<?php echo base_url() . 'uploads/' . $brg->foto_brg ?>" alt="Image 1063" class="card-img"></a>
                    <div class="card-body">
                      <h6 class="card-title mb-0 mt-1 mb-2 text-left"><?php echo word_limiter($brg->nama_brg, 5, '....'); ?></h6>
                      <h5>
                        <p class="text-danger text-left "><strong><?php echo rupiah($brg->hrg_jual) ?></strong></p>
                      </h5>
                      <?php if ($this->session->userdata('username')) { ?>
                        <button class="btn btn-danger btn-sm mb-2" type="submit"><i class="fas fa-cart-plus"></i> Keranjang</button>
                      <?php } else { ?>
                        <a class="btn btn-danger btn-sm mb-2" href="" data-toggle="modal" data-target="#loginModal"><i class="fas fa-cart-plus"></i> Keranjang</a>
                      <?php } ?>
                      <?php echo anchor('home/detail/' . $brg->no_brg, '<div class="btn btn-primary btn-sm mb-2"><i class="fas fa-angle-right"></i> Detail</div>') ?>
                      <?php echo form_close(); ?>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted">
          <div class="row">
            <div class="col">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php echo $pagination; ?>

<!-- Login Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger" role="alert">Silahkan Login Terlebih dahulu untuk membeli barang!</div>
      </div>
      <p align="center"><a class="btn btn-danger btn-lg" href="<?php echo base_url('auth/login') ?>">Login</a></p>
    </div>
  </div>
</div>