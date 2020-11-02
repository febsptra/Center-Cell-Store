<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<button type="button" class="btn btn-primary mt-4">Data Pembelian</button>
			<a type="button" class="btn btn-secondary mt-4 ml-2" href="<?php echo base_url('admin/data_pembelian/tambah_pembelian/') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-3">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-donate"></i> Data Pembelian</h1>
				</div>
				<div class="card-body">

					<!-- CARI Data -->
					<form class="form-validate" method="get" action="<?php echo base_url() . 'admin/data_pembelian/cari';
																		?>">
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
					<button class="btn btn-primary mb-3 float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-print"></i> Print Data Pembelian</button>
					<br>
					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Tgl </th>
									<th>Nama Barang</th>
									<th>Harga</th>
									<th>Jumlah</th>
									<th>Total Hrg</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pembelian as $beli) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo dateindo($beli->tgl_pembelian) ?> </td>
										<td><?php echo $beli->nama_brg ?> </td>
										<td>Rp <?php echo number_format($beli->hrg_beli, 0, ',', '.') ?> </td>
										<td><?php echo $beli->jumlah_beli ?> </td>
										<td>Rp <?php echo number_format($beli->total_harga, 0, ',', '.') ?> </td>
										<td>
											<a id=edit_beli data-toggle="modal" data-target="#modal_edit" data-no_pembelian="<?php echo $beli->no_pembelian ?>" data-tgl_pembelian="<?php echo $beli->tgl_pembelian ?>" data-nama_supplier="<?php echo $beli->nama_supplier ?>" data-kategori_brg="<?php echo $beli->kategori_brg ?>" data-nama_brg="<?php echo $beli->nama_brg ?>" data-no_brg="<?php echo $beli->no_brg ?>" data-hrg_beli="<?php echo $beli->hrg_beli ?>" data-jumlah_beli="<?php echo $beli->jumlah_beli ?>" data-total_harga="<?php echo $beli->total_harga ?>">
												<button class="btn btn-info mr-3">
													<i class="fas fa-edit"></i> Edit</button></a>
											<?php echo anchor('admin/data_pembelian/hapus/' . $beli->no_pembelian, '<div class="btn btn-primary" ><i class="fas fa-trash-alt"></i> Hapus</div>') ?>
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

		<!-- MODAL edit -->
		<div class="modal fade bd-example-modal-lg" data-backdrop="static" name="modal_edit" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-donate mr-2"></i> EDIT DATA PEMBELIAN</strong>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- MODAL FORM -->
						<form method="post" action="<?php echo base_url() . 'admin/data_pembelian/update' ?>" enctype="multipart/form-data">
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">No-Pembelian</label>
								<div class="col-sm-8">
									<input type="text" name="no_pembelian" id="no_pembelian" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Tanggal Pembelian</label>
								<div class="col-sm-8">
									<input type="date" name="tgl_pembelian" id="tgl_pembelian" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Supplier</label>
								<div class="col-sm-8">
									<input type="text" name="nama_supplier" id="nama_supplier" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Kategori Barang</label>
								<div class="col-sm-8">
									<input type="text" name="kategori_brg" id="kategori_brg" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Nama Barang</label>
								<div class="col-sm-8">
									<input type="text" name="nama_brg" id="nama_brg" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">No. Barang</label>
								<div class="col-sm-8">
									<input type="text" name="no_brg" id="no_brg" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Harga</label>
								<div class="col-sm-8">
									<input type="text" name="hrg_beli" id="hrg_beli" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah</label>
								<div class="col-sm-8">
									<input type="number" name="jumlah_beli" id="jumlah_beli" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="colFormLabel" class="col-sm-3 col-form-label">Total Harga</label>
								<div class="col-sm-8">
									<input type="text" name="total_harga" id="total_harga" class="form-control" readonly>
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-info name=" edit" value="SIMPAN">
								<button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
							</div>
						</form>
						<!-- END MODAL FORM -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL edit -->

		<!--Modal Print-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">CETAK DATA PEMBELIAN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<a class="btn btn-primary mb-3" href="<?php echo base_url() . 'admin/data_pembelian/print'; ?>" target="_blank" rel="nofollow"><i class="fas fa-print"></i> Print Seluruh Data Pembelian</a>
						<br>
						<p>
							-- Atau --
						</p>
						<!-- CARI Data -->
						<form class="form-validate" method="get" action="<?php echo base_url() . 'admin/data_pembelian/print_cari';
																			?>" target="_blank" rel="nofollow">
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

		<!-- SCRIPT MODAL -->
		<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(document).on("click", "#edit_beli", function() {
				var no_pembelian = $(this).data('no_pembelian');
				var tgl_pembelian = $(this).data('tgl_pembelian');
				var nama_supplier = $(this).data('nama_supplier');
				var kategori_brg = $(this).data('kategori_brg');
				var nama_brg = $(this).data('nama_brg');
				var no_brg = $(this).data('no_brg');
				var hrg_beli = $(this).data('hrg_beli');
				var jumlah_beli = $(this).data('jumlah_beli');
				var total_harga = $(this).data('total_harga');

				$("#modal_edit #no_pembelian").val(no_pembelian);
				$("#modal_edit #tgl_pembelian").val(tgl_pembelian);
				$("#modal_edit #nama_supplier").val(nama_supplier);
				$("#modal_edit #kategori_brg").val(kategori_brg);
				$("#modal_edit #nama_brg").val(nama_brg);
				$("#modal_edit #no_brg").val(no_brg);
				$("#modal_edit #hrg_beli").val(hrg_beli);
				$("#modal_edit #jumlah_beli").val(jumlah_beli);
				$("#modal_edit #total_harga").val(total_harga);

			})
		</script>
		<!-- END SCRIPT MODAL -->

		<!-- SCRIPT PERHITUNGAN LABA -->
		<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
		<script type="text/javascript">
			$("#modal_edit #jumlah_beli").keyup(function() {
				var a = parseFloat($("#modal_edit #jumlah_beli").val());
				var b = parseFloat($("#modal_edit #hrg_beli").val());
				var c = a * b;
				$("#modal_edit #total_harga").val(c);
			});
		</script>
		<!-- END SCRIPT PERHITUNGAN LABA -->

	</div>
</div>