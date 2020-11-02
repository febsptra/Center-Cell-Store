<div class="page-content">
	<div class="container-fluid">

		<!-- Navigasi -->
		<div class="container-fluid">
			<button type="button" class="btn btn-primary mt-4">Data Customer</button>
		</div>
		<!-- end navigasi -->

		<!-- CARD -->
		<div class="container-fluid">
			<div class="card mt-3">
				<div class="card-header">
					<h1 class="text-oren"><i class="fas fa-user-check"></i> Data Customer</h1>
				</div>
				<div class="card-body">

					<!-- TABEL DATATABLES-->
					<div class="table-responsive">
						<table id="datatable1" style="width: 100%;" class="table">
							<thead>
								<tr>
									<th>#</th>
									<th>username</th>
									<th>Nama Toko</th>
									<th>Kota</th>
									<th>No.HP</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach ($customer as $cst) : ?>
									<tr>
										<td><?php echo $no++ ?> </td>
										<td><?php echo $cst->username ?> </td>
										<td><?php echo $cst->nama_toko ?> </td>
										<td><?php echo $cst->kota ?> </td>
										<td><?php echo $cst->no_hp ?> </td>


										<td>
											<a id=info_cust data-toggle="modal" data-target="#modal_info" data-username="<?php echo $cst->username ?>" data-password="<?php echo $cst->password ?>" data-nama_toko="<?php echo $cst->nama_toko ?>" data-nama_pemilik="<?php echo $cst->nama_pemilik ?>" data-alamat="<?php echo $cst->alamat ?>" data-kota="<?php echo $cst->kota ?>" data-email="<?php echo $cst->email ?>" data-no_hp="<?php echo $cst->no_hp ?>" data-foto="<?php echo $cst->foto ?>">
												<button class="btn btn-success mr-3">
													<i class="fas fa-info"></i>nfo</button></a>

											<a id=edit_cust data-toggle="modal" data-target="#modal_edit" data-username="<?php echo $cst->username ?>" data-password="<?php echo $cst->password ?>" data-nama_toko="<?php echo $cst->nama_toko ?>" data-nama_pemilik="<?php echo $cst->nama_pemilik ?>" data-alamat="<?php echo $cst->alamat ?>" data-kota="<?php echo $cst->kota ?>" data-email="<?php echo $cst->email ?>" data-no_hp="<?php echo $cst->no_hp ?>" data-foto="<?php echo $cst->foto ?>">
												<button class="btn btn-info mr-3">
													<i class="fas fa-edit"></i> Edit</button></a>

											<?php echo anchor('admin/data_customer/hapus/' . $cst->username, '
	    		<div class="btn btn-primary" >
	    		<i class="fas fa-trash-alt"></i> Hapus</div>') ?>
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

		<!-- MODAL EDIT-->
		<div class="modal fade bd-example-modal-lg" name="modal_edit" id="modal_edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">

				<div class="modal-content">

					<div class="modal-header">
						<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-user-check mr-2"></i>EDIT DATA CUSTOMER</strong>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<!-- MODAL FORM EDIT-->

						<form method="post" action="<?php echo base_url() . 'admin/data_customer/update' ?>" enctype="multipart/form-data">

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Id Customer</label>
								<div class="col-sm-10">
									<input type="text" name="username" id="username" class="form-control" readonly>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" id="password" class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama</label>
								<div class="col-sm-10">
									<input type="text" name="nama_toko" id="nama_toko" class="form-control">
									</select>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Nama Pemilik</label>
								<div class="col-sm-10">
									<input type="text" name="nama_pemilik" id="nama_pemilik" class="form-control">
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
								<div class="col-sm-10">
									<div class="input-group flex-nowrap">
										<div class="input-group-prepend">
											<span class="input-group-text" id="addon-wrapping">@email</span>
										</div>
										<input type="text" class="form-control" name='email' id="email" aria-describedby="addon-wrapping">
									</div>
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">No. HP</label>
								<div class="col-sm-10">
									<input type="text" name="no_hp" id="no_hp" class="form-control">
								</div>
							</div>

							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Foto Customer</label>
								<div class="col-sm-10">
									<input type="file" name="foto" id="foto" class="form-control-file">
								</div>
							</div>

							<div class="modal-footer">
								<input type="submit" class="btn btn-info name=" edit" value="SIMPAN">
								<button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
							</div>
						</form>
						<!-- END MODAL FORM EDIT-->
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL EDIT -->

		<!-- MODAL INFO -->
		<div class="modal fade bd-example-modal-lg" name="modal_edit" id="modal_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-lg modal-dialog-centered" role="document">

				<div class="modal-content">

					<div class="modal-header">
						<strong id="exampleModalLabel" class="modal-title"><i class="fas fa-user-check mr-2"></i>NFO LENGKAP CUSTOMER</strong>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<!-- MODAL FORM INFO -->

						<form enctype="multipart/form-data">

							<div class="row">
								<div class="col-lg-5">
									<div class="mt-5">
										<img src="" width="250" id="foto" class="avatar avatar-lg ml-5 mb-5">
									</div>
								</div>


								<div class="col-lg-7">
									<div class="form-group">
										<label class="form-label">Username</label>
										<input name="username" id="username" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label class="form-label">Nama Toko</label>
										<input name="nama_toko" id="nama_toko" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label class="form-label">Nama Pemilik</label>
										<input name="nama_pemilik" id="nama_pemilik" class="form-control" readonly>
									</div>

									<div class="form-group">
										<label class="form-label">Alamat</label>
										<textarea class="form-control form-control-plaintext" name='alamat' id="alamat" rows="3" readonly></textarea>
									</div>

									<div class="form-group">
										<label class="form-label">Email</label>
										<input type="text" name="alamat" id="email" class="form-control form-control-plaintext" readonly>
									</div>

									<div class="form-group">
										<label class="form-label">Nomor HP/WA</label>
										<input type="text" name="no_hp" id="no_hp" class="form-control form-control-plaintext" readonly>
									</div>
								</div>
							</div>


						</form>
						<!-- END MODAL FORM INFO-->
					</div>
				</div>
			</div>
		</div>
		<!-- END MODAL INFO -->

		<!-- SCRIPT -->
		<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
		<script type="text/javascript">
			$(document).on("click", "#edit_cust", function() {
				var username = $(this).data('username');
				var password = $(this).data('password');
				var nama_toko = $(this).data('nama_toko');
				var nama_pemilik = $(this).data('nama_pemilik');
				var alamat = $(this).data('alamat');
				var kota = $(this).data('kota');
				var email = $(this).data('email');
				var no_hp = $(this).data('no_hp');
				var foto = $(this).data('foto');

				$("#modal_edit #username").val(username);
				$("#modal_edit #password").val(password);
				$("#modal_edit #nama_toko").val(nama_toko);
				$("#modal_edit #nama_pemilik").val(nama_pemilik);
				$("#modal_edit #alamat").val(alamat);
				$("#modal_edit #kota").val(kota);
				$("#modal_edit #email").val(email);
				$("#modal_edit #no_hp").val(no_hp);
				$("#modal_edit #foto").val(foto);

			})

			$(document).on("click", "#info_cust", function() {
				var username = $(this).data('username');
				var nama_toko = $(this).data('nama_toko');
				var nama_pemilik = $(this).data('nama_pemilik');
				var alamat = $(this).data('alamat');
				var kota = $(this).data('kota');
				var email = $(this).data('email');
				var no_hp = $(this).data('no_hp');
				var foto = $(this).data('foto');

				$("#modal_info #username").val(username);
				$("#modal_info #nama_toko").val(nama_toko);
				$("#modal_info #nama_pemilik").val(nama_pemilik);
				$("#modal_info #alamat").val(alamat);
				$("#modal_info #kota").val(kota);
				$("#modal_info #email").val(email);
				$("#modal_info #no_hp").val(no_hp);
				$("#modal_info #foto").attr("src", "http://localhost/CCbjm/uploads/" + foto);

			})
		</script>
		<!-- END SCRIPT -->

	</div>