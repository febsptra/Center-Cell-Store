<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<button type="button" class="btn btn-primary mt-4">Data Pegawai</button>
			<a type="button" class="btn btn-secondary mt-4 ml-2" href="<?php echo base_url('admin/data_pegawai/tambah_pegawai/') ?>"><i class="fas fa-plus"></i> Tambah Data</a>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-3">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-users"></i> Data Pegawai</h1>
				</div>
				<div class="card-body">

					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>ID Pegawai</th>
									<th>Nama</th>
									<th>Email</th>
									<th>No. HP</th>
									<th>Jabatan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($pegawai as $pgw) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo $pgw->id_pegawai ?> </td>
										<td><?php echo $pgw->nama_lengkap ?> </td>
										<td><?php echo $pgw->email ?> </td>
										<td><?php echo $pgw->no_hp ?> </td>
										<td><?php echo $pgw->jabatan ?> </td>
										<td>
											<a id=info_pgw data-toggle="modal" data-target="#modal_info" data-id_pegawai="<?php echo $pgw->id_pegawai ?>" data-password="<?php echo $pgw->password ?>" data-nama_lengkap="<?php echo $pgw->nama_lengkap ?>" data-alamat="<?php echo $pgw->alamat ?>" data-email="<?php echo $pgw->email ?>" data-no_hp="<?php echo $pgw->no_hp ?>" data-jabatan="<?php echo $pgw->jabatan ?>" data-foto="<?php echo $pgw->foto ?>">
												<button class="btn btn-success mr-3">
													<i class="fas fa-info"></i>nfo</button></a>
											<a id=edit_pgw data-toggle="modal" data-target="#modal_edit" data-id_pegawai="<?php echo $pgw->id_pegawai ?>" data-password="<?php echo $pgw->password ?>" data-nama_lengkap="<?php echo $pgw->nama_lengkap ?>" data-alamat="<?php echo $pgw->alamat ?>" data-email="<?php echo $pgw->email ?>" data-no_hp="<?php echo $pgw->no_hp ?>" data-jabatan="<?php echo $pgw->jabatan ?>" data-foto="<?php echo $pgw->foto ?>">
												<button class="btn btn-info mr-3">
													<i class="fas fa-edit"></i> Edit</button></a>
											<?php echo anchor('admin/data_pegawai/hapus/' . $pgw->id_pegawai, '<div class="btn btn-primary"><i class="fas fa-trash-alt"></i> Hapus</div>') ?>
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
		<div class="modal fade bd-example-modal-lg" name="modal_edit" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-user mr-2"></i> EDIT DATA PEGAWAI</strong>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- MODAL FORM EDIT -->
						<form method="post" action="<?php echo base_url() . 'admin/data_pegawai/update' ?>" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Id Pegawai</label>
								<div class="col-sm-3">
									<input type="text" name="id_pegawai" id="id_pegawai" class="form-control" readonly>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-4">
									<input type="text" name="password" id="password" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama</label>
								<div class="col-sm-4">
									<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">alamat</label>
								<div class="col-sm-10">
									<input type="text" name="alamat" id="alamat" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Email</label>
								<div class="col-6">
									<div class="input-group  flex-nowrap">
										<div class="input-group-prepend">
											<span class="input-group-text" id="addon-wrapping">@email</span>
										</div>
										<input type="text" class="form-control" name='email' id="email" aria-describedby="addon-wrapping">
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">No. HP</label>
								<div class="col-sm-5">
									<input type="text" name="no_hp" id="no_hp" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Jabatan</label>
								<div class="col-sm-5">
									<select class="custom-select" name="jabatan" id="jabatan">
										<option value="Admin">Admin</option>
										<option value="Gudang">Gudang</option>
										<option value="Supervisor">Supervisor</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Foto Pegawai</label>
								<div class="col-sm-10">
									<input type="file" name="foto" id="foto" class="form-control-file">
								</div>
							</div>
							<div class="modal-footer">
								<input type="submit" class="btn btn-info name=" edit" value="SIMPAN">
								<button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
							</div>
						</form>
						<!-- END MODAL FORM EDIT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL EDIT -->


		<!-- MODAL INFO -->
		<div class="modal fade bd-example-modal-lg" name="modal_info" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-info"></i>NFO LENGKAP PEGAWAI</strong>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- MODAL FORM INFO -->
						<form enctype="multipart/form-data">
							<table class="table table-borderless">
								<tr>
									<td align="center" justify="center">
										<div class="mt-5">
											<img src="" width="250" id="foto">
										</div>
									</td>
									<td>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Username</label>
											<div class="col-sm-8">
												<input type="text" name="id_pegawai" id="id_pegawai" class="form-control form-control-plaintext" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password</label>
											<div class="col-sm-8">
												<input type="password" name="password" id="password" class="form-control form-control-plaintext" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nama</label>
											<div class="col-sm-8">
												<input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control form-control-plaintext" readonly>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Alamat</label>
											<div class="col-sm-8">
												<textarea class="form-control form-control-plaintext" name='alamat' id="alamat" rows="5" readonly></textarea>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Email</label>
											<div class="col-sm-8">
												<input type="text" name="email" id="email" class="form-control form-control-plaintext" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">No. HP</label>
											<div class="col-sm-8">
												<input type="text" name="no_hp" id="no_hp" class="form-control form-control-plaintext" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Jabatan</label>
											<div class="col-sm-8">
												<input type="text" name="jabatan" id="jabatan" class="form-control form-control-plaintext" readonly>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</form>
						<!-- END MODAL FORM INFO-->
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL Info -->

		<!-- SCRIPT -->
		<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(document).on("click", "#edit_pgw", function() {
				var id_pegawai = $(this).data('id_pegawai');
				var password = $(this).data('password');
				var nama_lengkap = $(this).data('nama_lengkap');
				var alamat = $(this).data('alamat');
				var email = $(this).data('email');
				var no_hp = $(this).data('no_hp');
				var jabatan = $(this).data('jabatan');
				var foto = $(this).data('foto');
				$("#modal_edit #id_pegawai").val(id_pegawai);
				$("#modal_edit #password").val(password);
				$("#modal_edit #nama_lengkap").val(nama_lengkap);
				$("#modal_edit #alamat").val(alamat);
				$("#modal_edit #email").val(email);
				$("#modal_edit #no_hp").val(no_hp);
				$("#modal_edit #jabatan").val(jabatan);
				$("#modal_edit #foto").val(foto);
			})

			$(document).on("click", "#info_pgw", function() {
				var id_pegawai = $(this).data('id_pegawai');
				var password = $(this).data('password');
				var nama_lengkap = $(this).data('nama_lengkap');
				var alamat = $(this).data('alamat');
				var email = $(this).data('email');
				var no_hp = $(this).data('no_hp');
				var jabatan = $(this).data('jabatan');
				var foto = $(this).data('foto');
				$("#modal_info #id_pegawai").val(id_pegawai);
				$("#modal_info #password").val(password);
				$("#modal_info #nama_lengkap").val(nama_lengkap);
				$("#modal_info #alamat").val(alamat);
				$("#modal_info #email").val(email);
				$("#modal_info #no_hp").val(no_hp);
				$("#modal_info #jabatan").val(jabatan);
				$("#modal_info #foto").attr("src", "http://localhost/CCbjm/uploads/pegawai/" + foto);
			})
		</script>
		<!-- END SCRIPT -->
	</div>