<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<button type="button" class="btn btn-primary mt-4">Menunggu Verifikasi</button>
			<a type="button" class="btn btn-secondary mt-4 ml-2" href="<?php echo base_url('admin/data_pembayaran/lunas') ?>">LUNAS</a>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-4">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-money-check-alt"></i> Pembayaran Menunggu Verifikasi</h1>
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
									<th>No HP</th>
									<th>Total Tagihan</th>
									<th>Metode Pembayaran</th>
									<th>Bukti Pembayaran</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($menunggu as $menunggu) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo $menunggu->kode_transaksi ?> </td>
										<td><?php echo dateindo($menunggu->tgl_pembayaran) ?> </td>
										<td><?php echo $menunggu->an ?> </td>
										<td><?php echo $menunggu->no_hp ?> </td>
										<td>Rp <?php echo number_format($menunggu->jumlah_pembayaran, 0, ',', '.') ?> </td>
										<td><?php echo $menunggu->metode_pembayaran ?></td>
										<td><a href="<?php echo base_url() . 'uploads/' . $menunggu->foto ?>" target="_blank" rel="nofollow">Lihat</a></td>
										<td>

											<?php echo anchor('admin/data_pembayaran/verifikasi/' . $menunggu->kode_transaksi, '<div class="btn btn-info mr-3"> <i class="far fa-check-square"></i> Verifikasi</div>') ?>

											<?php echo anchor('admin/data_pembayaran/batal/' . $menunggu->kode_transaksi, '<div class="btn btn-primary mr-3"><i class="far fa-trash-alt"></i></div>') ?>
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
</div>