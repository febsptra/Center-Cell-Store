<div class="page-content">
	<div class="container-fluid">
		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-4">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-donate"></i> Data Penjualan</h1>
				</div>
				<div class="card-body">

					<!-- CARI Data -->
					<form class="form-validate" method="get" action="<?php echo base_url() . 'admin/data_penjualan/cari'; ?>">
						<div class="form-row">
							<div class="col-2">
								<input type="date" name="tgl_awal" id="tgl_awal" class="form-control" required data-msg="Mohon Masukan Tanggal Awal." required>
							</div>
							<label for="colFormLabel" class="col-form-label">Sampai</label>
							<div class="col-2">
								<input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" required data-msg="Mohon Masukan Tanggal Akhir." required>
							</div>
							<input type="submit" name="search" value="Cari" class="btn btn-primary ml-3">
						</div>
					</form>
					<!-- END CARI Data -->

					<button class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Print Data Penjualan</button>
					<br>
					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Kode Transaksi</th>
									<th>Tanggal Transaksi</th>
									<th>Nama Toko</th>
									<th>Total</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($penjualan_dibayar as $dibayar) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td width="15%"><?php echo $dibayar->kode_transaksi ?> </td>
										<td><?php echo dateindo($dibayar->tgl_pembayaran) ?> </td>
										<td><?php echo $dibayar->nama_toko ?> </td>
										<td>Rp <?php echo number_format($dibayar->jumlah_pembayaran, 0, ',', '.') ?> </td>
										<td><?php echo $dibayar->status_pembayaran ?></td>
										<td align="center">
											<a class="btn btn-success mr-3" href="<?php echo base_url() . 'admin/data_penjualan/detail/' . $dibayar->kode_transaksi; ?>" target="_blank" rel="nofollow"><i class="far fa-check-square"></i> Detail</a>
											<a class="btn btn-primary" href="<?php echo base_url() . 'riwayat_transaksi/print_transaksi/' . $dibayar->kode_transaksi; ?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /TABEL DATATABLES-->
				</div>
			</div>
		</div>
		<!-- END CARD -->
	</div>
	<!--END container fluid-->
</div>

<!--Modal Print-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">CETAK DATA PENJUALAN</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<a class="btn btn-primary mb-3" href="<?php echo base_url() . 'admin/data_penjualan/print'; ?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print Seluruh Data Penjualan</a>
				<br>
				<p>
					-- Atau --
				</p>
				<!-- CARI Data -->
				<form class="form-validate" method="get" action="<?php echo base_url() . 'admin/data_penjualan/print_cari'; ?>" target="_blank" rel="nofollow">
					<div class="form-row">
						<div class="col-4">
							<input type="date" name="tgl_awal" id="tgl_awal" class="form-control" required data-msg="Mohon Masukan Tanggal Awal." required>
						</div>
						<label for="colFormLabel" class="col-form-label">Sampai</label>
						<div class="col-4">
							<input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" required data-msg="Mohon Masukan Tanggal Akhir." required>
						</div>
						<button type="submit" class="btn btn-primary ml-3"><i class="fas fa-print"></i> Print</button>
					</div>
				</form>
				<!-- END CARI Data -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- END MODAL PRINT-->