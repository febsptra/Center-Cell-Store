<div class="container-fluid">
	<div class="card mt-2 mb-3"">
	<h3 class=" card-header font-weight-bold">
		<span class="badge badge-primary"><i class="fas fa-file-invoice"></i> Pembayaran :</span>
		</h3>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				<div class="card-body">
					<?php foreach ($penjualan as $pnj) : ?>
						<h3>
							<p>Kode Transaksi : <b class="text-danger"><?php echo ($pnj->kode_transaksi) ?></b></p>
							<p>Total tagihan transaksi ini : <b class="text-danger"><?php echo rupiah($pnj->jumlah_pembayaran) ?></b></p>
						</h3>
					<?php endforeach; ?>
					<div class="card border-left-primary mb-2">
						<div class="card-body">
							<img src="http://localhost/CCbjm/uploads/bank/logo_bri.jpg" width="50" id="foto_bri" class="mr-3">BCA A.N Center Cell Accessories NO.Rek 8990757756
						</div>
					</div>
					</span></h1>
					<div class="card border-left-success mb-2">
						<div class="card-body">
							<img src="http://localhost/CCbjm/uploads/bank/logo-bca.jpg" width="50" id="foto_bca" class="mr-3">BRI A.N Center Cell Accessories NO.Rek 8990757756
						</div>
					</div>
					</span></h1>
					<div class="card border-left-info mb-2">
						<div class="card-body">
							<img src="http://localhost/CCbjm/uploads/bank/logo-mandiri.jpg" width="50" id="foto_mandiri" class="mr-3">MANDIRI A.N Center Cell Accessories NO.Rek 8990757756
						</div>
					</div>
					<p class="mt-3 text-danger">* Silahkan Tranfer ke salah satu Rekening Bank diatas Sesuai dengan Total Tagihan, Lalu isi data dibawah!</p>
					<form action="<?php echo base_url() . 'penjualan/bayar'; ?>" method="post" enctype="multipart/form-data">
						<?php foreach ($penjualan as $pnj) : ?>
							<table class="table">
								<input type="hidden" name="kode_transaksi" class="form-control" value="<?php echo ($pnj->kode_transaksi) ?>">
								<input type="hidden" name="username" class="form-control" value="<?php echo ($pnj->username) ?>">
								<input type="hidden" name="nama_toko" class="form-control" value="<?php echo ($pnj->nama_toko) ?>">
								<input type="hidden" name="alamat" class="form-control" value="<?php echo ($pnj->alamat) ?>">
								<input type="hidden" name="kota" class="form-control" value="<?php echo ($pnj->kota) ?>">
								<input type="hidden" name="no_hp" class="form-control" value="<?php echo ($pnj->no_hp) ?>">
								<tr>
									<td>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label mt-2">Tanggal Pembayaran</label>
											<div class="col-sm-4">
												<input type="date" name="tgl_pembayaran" class="form-control mt-2" required>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label mt-2">Jumlah Pembayaran</label>
											<div class="col-sm-4">
												<input type="text" name="jmlh_pmb" value="Rp <?php echo number_format($pnj->jumlah_pembayaran, 0, ',', '.') ?>" class="form-control mt-2" readonly>
												<input type="hidden" name="jumlah_pembayaran" value="<?php echo ($pnj->jumlah_pembayaran) ?>" class="form-control mt-2">
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label mt-2">AN / Atas Nama</label>
											<div class="col-sm-4">
												<input type="text" name="an" class="form-control mt-2" required>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label mt-2">Metode Pembayaran</label>
											<div class="col-sm-4">
												<select class="custom-select mt-2" name="metode_pembayaran" id="inputGroupSelect01">
													<option selected>Pilih Metode</option>
													<option value="BRI Transfer">BRI Transfer</option>
													<option value="BRIVA">BRIVA</option>
													<option value="BCA Transfer">BCA Transfer</option>
													<option value="BCA V.A">BCA V.A</option>
													<option value="Mandiri Transfer">Mandiri Transfer</option>
													<option value="Mandiri V.A">Mandiri V.A</option>
													<option value="Lainya">Lainya</option>
												</select>
											</div>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label mt-2">Foto Bukti Pembayaran</label>
											<div class="col-sm-7">
												<input type="file" name="foto" class="form-control-file mt-2" required>
												<small id="harus_lengkap" class="form-text text-danger">
													<b>PENTING!</b> Jika data di foto bukti pembayaran tidak sesuai dengan data transaksi maka transaksi akan kami batalkan!
												</small>
											</div>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
							<tr>
								<td align="center">
									<input type="hidden" name="status_pembayaran" class="form-control form-control-sm">
									<button type="submit" class="btn btn-primary btn-lg"><i class="far fa-check-square"></i> BAYAR</button>
								</td>
							</tr>
							</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>