<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Data Pengguna </h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search for...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<!-- alert simpan data -->
		<?php if ($this->session->flashdata('success')):?>
		<div id="pesan" class="alert alert-success" role="alert">
			<strong><?=$this->session->flashdata('success');?></strong>
		</div>
		<?php endif;?>
		<!-- aler hapus data -->
		<?php if ($this->session->flashdata('error')):?>
		<div id="pesan" class="alert alert-danger" role="alert">
			<strong><?=$this->session->flashdata('error');?></strong>
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data User</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
										class="fa fa-wrench"></i></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Settings 1</a>
									</li>
									<li><a href="#">Settings 2</a>
									</li>
								</ul>
							</li>
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<button type="button" class="btn btn-primary fa fa-plus " data-toggle="modal" data-target="#tambah_admin">
						Tambah Admin Sistem
					</button>
					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 1%;">No</th>
									<th>Username</th>
									<th style="width: 11%;">Edit Password</th>
									<th>Email</th>
									<th style="width: 13%;">Waktu</th>
									<th>Level</th>
									<th>Opsi</th>
									</th>

								</tr>
							</thead>
							<tbody>
								<?php $no = 1; 
                        foreach ($dataUser as $key => $value):?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$value['username'];?></td>
									<td>
										<a href="<?=base_url();?>" class="btn btn-primary btn-sm fa fa-edit edit-password"
											data-id="<?=$value['id_user']?>"> Edit Password</a>
									</td>
									<td><?=$value['email'];?></td>
									<td><?=$value['waktu'];?></td>
									<td> <i class="label label-primary"><?=$value['level'];?></i></td>
									<td><a href="#" onclick="deleteUser(<?=$value['id_user']?>);" class="btn btn-danger btn-xs"> <i
												class="fa fa-trash"> Delete</i> </a></td>
								</tr>
								<?php endforeach; ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="tambah_admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
			</div>
			<div class="modal-body">

				<form>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Username</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="username" class="form-control" placeholder="masukan username">
							<!-- <small>  <font color="red">username wajib isi</font></small>     -->
							<small style="color: red;" class="text-error username_error"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Email</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="email" name="email" class="form-control" placeholder="masukan email">
							<small style="color: red;" class="text-error email_error"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Password</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="password" name="password" class="form-control" placeholder="masukan password">
							<small style="color: red;" class="text-error password_error"></small>
						</div>
					</div>
				
					<!-- <div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">level</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="level" class="form-control" placeholder="masukan password">
							<small style="color: red;" class="text-error password_error"></small>
						</div>
					</div> -->

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Level
						</label>
						<div class="col-md-3 col-sm-9 col-xs-12">
							<select name="level" id="" class="form-control">
								<option>admin</option>
								<option>hrd</option>
								<option>pelamar</option>
							</select>
						</div>
					</div>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" onclick="save_admin()" class="btn btn-primary btn_save">Save</button>
				<!-- <a href="" onclick="save_admin()"class="btn btn-primary btn_save">sav</a> -->
			</div>
			</form>
		</div>
	</div>
</div>

<!-- modal konfirmasi hapus data -->
<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form action="<?=base_url();?>c_admin/deleteUser" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Konfirmasi Hapus</h5>

				</div>
				<div class="modal-body">Yakin Akan Hapus Data User ?
					<input type="hidden" name="id_user" id="id">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					<button type="submit" class="btn btn-primary btn_hapus">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal edit passsowd -->
<div class="modal fade" id="edit-password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
	aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align: center;" class="modal-title">Edit Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?=base_url();?>c_admin/updatePassword" method="post" enctype="multipart/form-data">
					<input type="text" hidden name="id" id="id_u">

					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" id="username_u" class="form-control" placeholder=""
							aria-describedby="helpId">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="text" name="email" id="email_u" class="form-control" placeholder="" aria-describedby="helpId">
					</div>
					<!-- <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama_u" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
 -->
					<div class="form-group">
						<label for="">Edit Password</label>
						<input type="password" name="password" id="password_u" class="form-control" placeholder="*******"
							aria-describedby="helpId">
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-sm fa fa-save"> Update</button>
			</div>
			</form>
		</div>
	</div>
</div>


<!-- <script>
	$('.edit-password').on('click', function (e) {

		e.preventDefault();

		$('#edit-password').modal();
		let id = $(this).data('id')
		$.ajax({
			type: "POST",
			url: "<?=base_url('c_admin/getDataPassword')?>",
			data: {
				id: id
			},
			dataType: "JSON",
			success: function (response) {
				console.log(response);
				$('#id').attr('hidden', true);
				$('input[name=id]').val(response.id_user);
				$('#username_u').val(response.username);
				$('#email_u').val(response.email);
				$('#edit-password').modal('show');
			}
		});

	})

</script>

<script>
	function deleteUser(id) {
		$("#id").val(id);
		$("#konfirmasi").modal("show");
	}

</script> -->
<!-- <script>
	$('.edit-password').on('click', function (e) {

		e.preventDefault();

		$('#edit-password').modal();
		let id = $(this).data('id')
		$.ajax({
			type: "POST",
			url: "<?=base_url('c_admin/getDataPassword')?>",
			data: {
				id: id
			},
			dataType: "JSON",
			success: function (response) {
				console.log(response);
				$('#id').attr('hidden', true);
				$('input[name=id]').val(response.id_user);
				$('#username_u').val(response.username);
				$('#email_u').val(response.email);
				$('#edit-password').modal('show');
			}
		});

	})

</script>

<script>
	function deleteUser(id) {
		$("#id").val(id);
		$("#konfirmasi").modal("show");
	}

</script> -->

	<script type="text/javascript">
	$(document).ready(function () {

		// e.preventDefault();

		// $('.btn_save').on('click', function (e) {
			
			// })
			
		})

		
		function save_admin(){
			
			let username = $('input[name="username"]').val();
			let email = $('input[name="email"]').val();
			let password = $('input[name="password"]').val();
			let level = $('select[name="level"]').val();
	
			$.ajax({
				type: "post",
				url: "<?=base_url();?>c_admin/addAdmin",
				data: {
					username: username,
					email: email,
					password: password,
					level: level
				},
				dataType: "json",
				success: function (response) {
					console.log(response);
	
					if (response.status == 'validation_error') {
						$('.username_error').text(response.errors.username);
						$('.email_error').text(response.errors.email);
						$('.password_error').text(response.errors.password);
						$('.level_error').text(response.errors.level);
					} else {
						$('#tambah_admin').modal('hide');
					
						swal({
							title: 'Berhasil',
							text: 'data admin berhasil di tambah',
							icon: 'success',
							button: 'ok'
						}).then(function(){
							location.reload();
						});
						
						$('[name="username"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
						$('[name="email"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
						$('[name="password"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
						$('select[name="level"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
					}
	
				},
				error: function () {
					swal({
						title: "Gagal!",
						text: "Data Gagal Save",
						icon: "error",
						button: "Ok",
					});
				}
			});
		}

		function deleteUser(id) {
		$("#id").val(id);
		$("#konfirmasi").modal("show");
		$(".btn_hapus").on('click', function () {
			swal({
							title: 'Berhasil',
							text: 'data admin berhasil di tambah',
							icon: 'success',
							button: 'ok'
						})
		  })
		
	}


</script>
