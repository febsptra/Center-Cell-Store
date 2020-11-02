<div class="container-fluid">

	<div class="card mt-3 mb-5">
		<?php foreach ($barang as $brg) : ?>
			<h3 class="card-header font-weight-bold"><?php echo $brg->nama_brg ?></h3>
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url() . 'uploads/' . $brg->foto_brg ?>" class="card-img-top">
					</div>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td width="200px">Nama Barang </td>
								<td><strong><?php echo $brg->nama_brg ?></strong></td>
							</tr>
							<tr>
								<td>Kategori </td>
								<td><strong><?php echo $brg->kategori_brg ?></strong></td>
							</tr>
							<tr>
								<td>Harga </td>
								<td><strong>Rp <?php echo number_format($brg->hrg_jual, 0, ',', '.') ?></strong></td>
							</tr>
							<tr>
								<td colspan="2">
									<h5><b>Keterangan :</b></h5><textarea class="form-control form-control-plaintext" name='keterangan' id="keterangan" rows="20" readonly><?php echo $brg->keterangan ?></textarea>
								</td>
							</tr>
							<tr>
								<td align="center" colspan="2">
									<?php echo form_open(base_url('home/tambah_keranjang'));
									echo form_hidden('id', $brg->no_brg);
									echo form_hidden('qty', 1);
									echo form_hidden('price', $brg->hrg_jual);
									echo form_hidden('coupon', $brg->laba);
									echo form_hidden('name', $brg->nama_brg);
									?>
									<button class="btn btn-danger" href="" type="submit"><i class="fas fa-cart-plus"></i> Tambah ke Keranjang</button>
									<a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>"><i class="fas fa-arrow-left"></i> Halaman Awal</a>
									<?php echo form_close(); ?>
							</tr>
						</table>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
	</div>
</div>