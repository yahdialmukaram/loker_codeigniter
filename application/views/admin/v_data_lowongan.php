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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
									aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
					<button type="button" class="btn btn-primary fa fa-plus " data-toggle="modal"
						data-target="#tambah_loker">
						Tambah Loker Baru
					</button>

					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 1%;">No</th>
									<th>Posisi Lowongan</th>
									<th>Jenjang Pendidikan</th>
									<th>Alamat Perusahaan</th>
									<th>Keterangan</th>
									<th>Waktu</th>
									<th>Status</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; 
                        foreach ($getDataLowongan as $key => $value):?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$value['posisi_lowongan'];?></td>
									<td><?=$value['jenjang_pendidikan'];?></td>
									<td><?=$value['alamat_perusahaan'];?></td>
									<td><?=$value['keterangan'];?></td>
									<td><?=$value['waktu'];?></td>

									<?php if ($value['status']== 0 ):?>
									<td> <a href="#" onclick="verifikasi(<?=$value['id_user']?>);"
											class="label label-primary fa fa-refresh"> Daftar Lowongan Ini ?</a></td>
									<?php elseif ($value['status']==1) :?>
									<td> <a href="#" class="label label-success fa fa-check"> Pendaftaran Success</a>
									</td>
									<?php endif?>

									<td><a href="#" onclick="deleteUser();" class="btn btn-danger btn-xs"> <i
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


<div class="modal fade" id="tambah_loker" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Loker Baru</h5>
			</div>
			<div class="modal-body">

				<form>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Posisi Lowongan</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="posisi_lowongan" class="form-control"
								placeholder="input posisi lowongan">
							<!-- <small>  <font color="red">username wajib isi</font></small>     -->
							<small style="color: red;" class="text-error posisi_lowongan_error"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Jenjang Pendidikan</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="jenjang_pendidikan" class="form-control"
								placeholder="input jenjang pendidikan">
							<!-- <small>  <font color="red">username wajib isi</font></small>     -->
							<small style="color: red;" class="text-error jenjang_pendidikan_error"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Alamat Perusahaan</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="alamat_perusahaan" class="form-control"
								placeholder="input pendidikan">
							<!-- <small>  <font color="red">username wajib isi</font></small>     -->
							<small style="color: red;" class="text-error alamat_perusahaan_error"></small>
						</div>
					</div>


					<!-- <div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Alamat Perusahaan</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="col-md-9 col-sm-9 col-xs-12">
								<textarea class="form-control" name="alamat_perusahaan" id="" cols="20"
									rows="3"></textarea>
								<small style="color: red;" class="text-error alamat_perusahaan-error"></small>
							</div>	
					
							<small style="color: red;" class="text-error alamat_perusahaan_error"></small>
						</div>
					</div> -->

					<div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">Keterangan</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="keterangan" class="form-control" placeholder="input keterangan">
							<!-- <small>  <font color="red">username wajib isi</font></small>     -->
							<small style="color: red;" class="text-error keterangan_error"></small>
						</div>
					</div>



					<!-- <div class="form-group">
						<label class="control-label col-md-12 col-sm-3 col-xs-12">level</label>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" name="level" class="form-control" placeholder="masukan password">
							<small style="color: red;" class="text-error password_error"></small>
						</div>
					</div> -->


			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" onclick="save_loker()" class="btn btn-primary btn_save">Save</button>
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
						<input type="text" name="email" id="email_u" class="form-control" placeholder=""
							aria-describedby="helpId">
					</div>
					<!-- <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama_u" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
 -->
					<div class="form-group">
						<label for="">Edit Password</label>
						<input type="password" name="password" id="password_u" class="form-control"
							placeholder="*******" aria-describedby="helpId">
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


<!-- verivikasi status -->
<div class="modal fade" id="verifikasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-sm">
			<form class="form-verifikasi" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Konfirmasi Verifikasi Pendaftaran</h5>

				</div>
				<div class="modal-body">
					<input type="hidden" name="id" id="id" value="" class="id_user">
					<div class="text"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
					<button type="submit" class="btn btn-primary">Ya</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	$('.edit-password').on('click', function (e) {

		e.preventDefault();

		$('#edit-password').modal();
		let id = $(this).data('id');
		$.ajax({
			type: "post",
			url: "<?=base_url('c_admin/getDataPassword');?>",
			data: {
				id: id
			},
			dataType: "json",
			success: function (response) {
				console.log(response);
				$('#edit-password').modal('show');
				// $('#id').attr('hidden', true);
				$('input[name=id]').val(response.id_user);
				$('#username_u').val(response.username);
				$('#email_u').val(response.email);

			}
		});


	})

</script>
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

// save admin
	

	function save_loker() {

		let posisi_lowongan = $('input[name="posisi_lowongan"]').val();
		let jenjang_pendidikan = $('input[name="jenjang_pendidikan"]').val();
		let alamat_perusahaan = $('input[name="alamat_perusahaan"]').val();
		let keterangan = $('input[name="keterangan"]').val();
		// let level = $('select[name="level"]').val();

		$.ajax({
			type: "post",
			url: "<?=base_url();?>c_perusahaan/save_loker",
			data: {
				posisi_lowongan: posisi_lowongan,
				jenjang_pendidikan: jenjang_pendidikan,
				alamat_perusahaan: alamat_perusahaan,
				keterangan: keterangan,
				// level: level
			},
			dataType: "json",
			success: function (response) {
				console.log(response);

				if (response.status == 'validation_error') {
					$('.posisi_lowongan_error').text(response.errors.posisi_lowongan);
					$('.jenjang_pendidikan_error').text(response.errors.jenjang_pendidikan);
					$('.alamat_perusahaan_error').text(response.errors.alamat_perusahaan);
					$('.keterangan_error').text(response.errors.keterangan);
				} else {
					$('#tambah_loker').modal('hide');

					swal({
						title: 'Berhasil',
						text: 'data loker berhasil di tambah',
						icon: 'success',
						button: 'ok'
					}).then(function () {
						location.reload();
					});

					$('[name="posisi_lowongan"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
					$('[name="jenjang_pendidikan"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
					$('[name="alamat_perusahaan"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
					// $('[name="alamat_perusahaan"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
					$('[name="keterangan"]').val(''); //untuk mhilangakaanisi form stelah tambah berhasil
				}

			},
			error: function () {
				swal({
					title: "Gagal!",
					text: "Data Loker Gagal Save",
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

<script>
	function verifikasi(id) {
		$(".form-verifikasi").attr("action", '<?=base_url();?>c_perusahaan/update_status/verifikasi')
		$("#id").val(id);
		$(".text").text("Yakin akan mendaftar di lowonan ini ?")
		$("#verifikasi").modal("show");

	}

	// function cancel_verifikasi(id) {
	// 	$(".form-verifikasi").attr("action", '<?=base_url();?>controller/update_status/cancel')
	// 	$(".id_user").val(id);
	// 	$(".text").text("Yakin akan batalkan verifikasi untuk data ini  ?")
	// 	$("#verifikasi").modal("show");
	// }

</script>
