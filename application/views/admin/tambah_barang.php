<div class="page-content">
<div class="container-fluid">


<!-- Navigasi -->
<div class="container-fluid">
<a type="button" class="btn btn-primary mt-4 ml-2" href="<?php echo base_url('admin/data_barang') ?>">Data Barang </a>
<button type="button" class="btn btn-secondary mt-4 ml-2"><i class="fas fa-plus"></i> Tambah Data</button>
</div>	
<!-- end navigasi -->  

<!-- CARD -->
<div class="container-fluid">
<div class="row">
<div class="col-lg-8">

<div class="card mt-3">
<h1 class="card-header text-oren"><i class="fas fa-plus"></i> Tambah Barang</h1>
<div class="card-body">


<!-- FORM -->    
<form class="form-validate" action="<?php echo base_url(). 'admin/data_barang/tambah_aksi';
?>" method="post" enctype="multipart/form-data">

  <div class="form-group row">
    <label class="col-sm-2 form-label">Nama Barang</label>
    <div class="col-sm-9">
    <input id="nama_brg" name="nama_brg" type="text" required data-msg="Nama Barang masih kosong." placeholder="Nama Barang" class="form-control form-control-success"><small class="form-text">Masukan nama barang lengkap dengan merk(jika ada).</small>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Pilih Supplier</label>
    <div class="col-sm-9">
    <select class="custom-select" name="nama_supplier" id="nama_supplier" placeholder="Pilih Supplier">
        <option selected>Pilih Supplier</option>
        <?php foreach($supplier as $supp) : ?>
        <option value="<?php echo $supp->nama_supplier ?>"><?php echo $supp->nama_supplier ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Kategori</label>
    <div class="col-sm-9">
      <select data-style="btn-primary" class="selectpicker" name="kategori_brg" id="kategori_brg">
        <option selected>Pilih Kategori</option>
        <option value="Anti Gores">Anti Gores</option>
        <option value="Charger">Charger</option>
        <option value="Case">Case</option>
        <option value="Headset">Headset</option>
        <option value="Lainya">Lainya</option>
      </select><small class="form-text">Pilih Kategori Barang.</small>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Harga Beli</label>
    <div class="col-sm-9">
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Rp.</span>
    </div>
    <input id="hrg_beli" name="hrg_beli" type="number" required data-msg="harga beli masih kosong." placeholder="Harga Beli" class="form-control form-control-success">
    </div>
    <small class="form-text">Masukan harga beli barang.</small>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Harga Jual</label>
    <div class="col-sm-9">
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Rp.</span>
    </div>
    <input id="hrg_jual" name="hrg_jual" type="number" required data-msg="harga Jual masih kosong." placeholder="Harga Jual" class="form-control form-control-success">
    </div>
    <small class="form-text">Masukan harga Jual barang.</small>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Laba</label>
    <div class="col-sm-9">
    <div class="input-group">
    <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping">Rp.</span>
    </div>
    <input id="laba" name="laba" type="number" placeholder="Harga Beli" class="form-control" value="0" readonly>
    </div>
    <small class="form-text">Total Laba otomatis dari perhitungan Harga Jual dikurang Harga Beli.</small>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Keterangan</label>
    <div class="col-sm-9">
    <textarea class="form-control" name="keterangan" rows="5" required data-msg="Keterangan barang masih kosong." placeholder="Keterangan"></textarea><small class="form-text">Tulis Keterangan barang, bisa sebagai catatan atau deskripsi barang.</small>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 form-label">Foto Barang</label>
    <div class="col-sm-9">
    <input type="file" id="foto_brg" name="foto_brg"  required data-msg="Foto Barang masi kosong." placeholder="Nama Barang" class="form-control-file"><small class="form-text">Upload Foto Barang.</small>
    </div>
  </div>

  <div class="form-group row">
  <div class="col-sm-10 ml-auto">
  <button type="submit" class="btn btn-primary"> SIMPAN</button>
  <a class="btn btn-secondary ml-2" href="<?php echo base_url('admin/data_barang') ?>" role="button">Batal</a>
  </div>
  </div>

</form>
<!-- End FORM -->

</div>
</div>
</div>
<!-- END CARD -->

</div>

<!-- SCRIPT PERHITUNGAN LABA -->
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
<script type="text/javascript">
 $("#hrg_beli").keyup(function(){   
   var a = parseFloat($("#hrg_beli").val());
   var b = parseFloat($("#hrg_jual").val());
   var c = b+(-a);
   $("#laba").val(c);
 });
 
 $("#hrg_jual").keyup(function(){
   var a = parseFloat($("#hrg_beli").val());
   var b = parseFloat($("#hrg_jual").val());
   var c = b+(-a);
   $("#laba").val(c);
 });
</script>
<!-- END SCRIPT PERHITUNGAN LABA -->