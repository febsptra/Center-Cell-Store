<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<button type="button" class="btn btn-primary mt-4">Menunggu Diproses</button>
			<a type="button" class="btn btn-secondary mt-4 ml-2" href="<?php echo base_url('admin/data_retur/sudah_diproses/') ?>">Sudah Diproses</a>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-3">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-exchange-alt"></i> Data Retur Barang</h1>
				</div>
				<div class="card-body">
					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>Tgl Retur</th>
									<th>Nama Barang</th>
									<th>Jumlah</th>
									<th>Status</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($retur as $rr) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo dateindo($rr->tgl_retur) ?> </td>
										<td><?php echo $rr->nama_brg ?> </td>
										<td><?php echo $rr->jumlah_brg ?> </td>
										<td><?php echo $rr->status ?> </td>
										<td>
											<a id=retur_brg data-toggle="modal" data-target="#modal_retur" data-tgl_retur="<?php echo dateindo($rr->tgl_retur) ?>" data-nama_toko="<?php echo $rr->nama_toko ?>" data-alamat="<?php echo $rr->alamat ?>" data-no_hp="<?php echo $rr->no_hp ?>">
												<button class="btn btn-success mr-3">
													<i class="fas fa-edit"></i> Detail</button></a>
											<?php echo anchor('admin/data_retur/selesai/' . $rr->no, '<div class="btn btn-primary mr-5"> <i class="far fa-check-square"></i> Proses</div>') ?>
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

<!-- MODAL edit -->
<div class="modal fade bd-example-modal-lg" name="modal_retur" id="modal_retur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-exchange-alt"></i> DETAIL RETUR</strong>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- MODAL FORM EDIT -->
				<form method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama_brg">Tgl Retur</label>
						<input type="text" class="form-control" name="tgl_retur" id="tgl_retur" readonly>
					</div>
					<div class="form-group">
						<label for="">Nama Toko</label>
						<input type="text" class="form-control" id="nama_toko" name="" readonly>
					</div>
					<div class="form-group">
						<label for="">Alamat</label>
						<textarea class="form-control form-control-plaintext" name="" id="alamat" rows="5" readonly></textarea>
					</div>
					<div class="form-group">
						<label for="">No HP</label>
						<input type="number" class="form-control" id="no_hp" name="" readonly>
					</div>
				</form>
				<!-- END MODAL FORM EDIT -->
			</div>
		</div>
	</div>
</div>
<!-- END MODAL EDIT -->

<!-- SCRIPT -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
	$(document).on("click", "#retur_brg", function() {
		var tgl_retur = $(this).data('tgl_retur');
		var nama_toko = $(this).data('nama_toko');
		var alamat = $(this).data('alamat');
		var no_hp = $(this).data('no_hp');
		$("#modal_retur #tgl_retur").val(tgl_retur);
		$("#modal_retur #nama_toko").val(nama_toko);
		$("#modal_retur #alamat").val(alamat);
		$("#modal_retur #no_hp").val(no_hp);
	})
</script>
<!-- END SCRIPT -->