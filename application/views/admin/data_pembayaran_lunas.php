<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<a type="button" class="btn btn-primary mt-4 mr-2" href="<?php echo base_url('admin/data_pembayaran') ?>">Menunggu Verifikasi</a>
			<button type="button" class="btn btn-secondary mt-4">LUNAS</button>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-4">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-money-check-alt"></i> Data Pembayaran Lunas</h1>
				</div>
				<div class="card-body">

					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Kode Transaksi</th>
									<th>Tanggal Pembayaran</th>
									<th>Atas Nama</th>
									<th>Total Tagihan</th>
									<th>Metode Pembayaran</th>
									<th>Bukti Pembayaran</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($lunas as $lunas) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo $lunas->kode_transaksi ?> </td>
										<td><?php echo dateindo($lunas->tgl_pembayaran) ?> </td>
										<td><?php echo $lunas->an ?> </td>
										<td>Rp <?php echo number_format($lunas->jumlah_pembayaran, 0, ',', '.') ?> </td>
										<td><?php echo $lunas->metode_pembayaran ?></td>
										<td><a href="<?php echo base_url() . 'uploads/' . $lunas->foto ?>" target="_blank" rel="nofollow">Lihat</a></td>
										<td><?php echo $lunas->status_pembayaran ?></td>
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
</div>