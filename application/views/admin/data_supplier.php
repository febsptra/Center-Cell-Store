<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<button type="button" class="btn btn-primary mt-4">Data Supplier</button>
			<a type="button" class="btn btn-secondary mt-4 ml-2" href="<?php echo base_url('admin/data_supplier/tambah_supplier/') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-3">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-people-carry"></i> Data Supplier</h1>
				</div>
				<div class="card-body">
					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>ID Supplier</th>
									<th>Nama Supplier</th>
									<th>No. HP</th>
									<th>AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($supplier as $supp) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo $supp->kode_supplier ?> </td>
										<td><?php echo $supp->nama_supplier ?> </td>
										<td><?php echo $supp->no_hp ?> </td>
										<td>
											<a id=edit_supp data-toggle="modal" data-target="#modal_edit" data-kdsupp="<?php echo $supp->kode_supplier ?>" data-nmsupp="<?php echo $supp->nama_supplier ?>" data-alamat="<?php echo $supp->alamat ?>" data-nohp="<?php echo $supp->no_hp ?>">
												<button class="btn btn-info mr-3">
													<i class="fas fa-edit"></i> Edit</button></a>
											<?php echo anchor('admin/data_supplier/hapus/' . $supp->kode_supplier, '<div class="btn btn-primary" ><i class="fas fa-trash-alt"></i> Hapus</div>') ?>
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
<div class="modal fade bd-example-modal-lg" name="modal_edit" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-people-carry mr-2"></i> EDIT DATA SUPPLIER</strong>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- FORM MODAL-->
				<form id="form" method="post" action="<?php echo base_url() . 'admin/data_supplier/update' ?>" enctype="multipart/form-data">
					<div class="form-group row">
						<label for="kode_supplier" class="col-sm-3 col-form-label">Kode Supplier</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="kode_supplier" name="kode_supplier" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="kode_supplier" class="col-sm-3 col-form-label">Nama Supplier</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nama_supplier" name="nama_supplier">
						</div>
					</div>
					<div class="form-group row">
						<label for="kode_supplier" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<input type="textarea" class="form-control" id="alamat" name="alamat">
						</div>
					</div>
					<div class="form-group row">
						<label for="kode_supplier" class="col-sm-3 col-form-label">No HP</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="no_hp" name="no_hp">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-info"> SIMPAN</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
					</div>
				</form>
				<!-- END FORM MODAL-->
			</div>
		</div>
	</div>
</div>
<!-- END MODAL edit -->


<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
	$(document).on("click", "#edit_supp", function() {
		var kd_supp = $(this).data('kdsupp');
		var nm_supp = $(this).data('nmsupp');
		var alamat = $(this).data('alamat');
		var no_hp = $(this).data('nohp');
		$("#modal_edit #kode_supplier").val(kd_supp);
		$("#modal_edit #nama_supplier").val(nm_supp);
		$("#modal_edit #alamat").val(alamat);
		$("#modal_edit #no_hp").val(no_hp);

	})
</script>

</div>