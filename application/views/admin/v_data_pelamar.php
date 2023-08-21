<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Data Pelamar </h3>
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
						<h2>Data Pelamar</h2>

						<div class="clearfix"></div>
					</div>

					<div class="x_content">

						<table id="datatable" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 1%;">No</th>
									<th>Nik Ktp</th>
									<th>Nama Pelamar</th>
									<th>Alamat Domisili</th>
									<th>Email</th>
									<th>Tgl Lahir</th>
									<th>Tempat Lahir</th>
									<th>Jenis kelamin</th>
									<th>Ditail Pelamar</th>
									<th>Status</th>

									<!-- <th>Provinsi</th>
									<th>Kabupaten</th>
									<th>Kecamatan</th>
									<th>Kode Pos</th>
									<th>Sd</th>
									<th>Smp</th>
									<th>Sma</th>
									<th>Universitas</th>
									<th>pengalaman</th>
									<th>status</th> -->
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; 
                        foreach ($getDataPelamar as $key => $value):?>
								<tr>
									<td>
										<?=$no++?>
									</td>
									<td>
										<?=$value['no_ktp'];?>
									</td>
									<td>
										<?=$value['nama'];?>
									</td>
									<td>
										<?=$value['alamat_domisili'];?>
									</td>
									<td>
										<?=$value['email'];?>
									</td>
									<td>
										<?=$value['tgl_lahir'];?>
									</td>
									<td>
										<?=$value['tempat_lahir'];?>
									</td>
									<td>
										<?=$value['jenis_kelamin'];?>
									</td>
									<td>
										<a href="#" onclick="ditailsPelamar (<?=$value['id_pelamar']?>);"
											class="btn btn-primary btn-sm fa fa-search-plus"> Ditails Data Pelamar</a>
									</td>

									<?php if ($value['status']== 0 ):?>
									<td>
										<a href="#" onclick="verifikasi(<?=$value['id_pelamar']?>);"
											class="btn btn-primary btn-sm fa fa-ban"> Belum verifikasi</a></td>
									<?php elseif ($value['status']== 1 ) :?>
										<td><a href="#" onclick="cancel(<?=$value['id_pelamar']?>)" class="btn btn-success fa fa-check"> Sudah terverifikasi</a></td>
									
									<?php endif ?>

									<td>
										<a href="#" onclick="deleteUser(<?=$value['id_user']?>);"
											class="btn btn-danger btn-xs"> <i class="fa fa-trash"> Delete</i> </a>
									</td>
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




<!-- modal konfirmasi hapus data -->
<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content modal-sm">
			<form action="<?=base_url();?>c_admin/deleteUser" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Konfirmasi Hapus</h5>

				</div>
				<div class="modal-body">Yakin Akan Hapus Data Pelamar ?
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

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
  Launch
</button> -->

<style>
	.modal-dialog {
		width: 1200px;
	}

</style>
<!-- Modal pelamar-->
<div class="modal fade" id="ditails_pelamar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<!-- <h5 class="modal-title">Ditail Data Pelamar</h5> -->
				<h5 style="text-align: center;">Ditails Data Pelamar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modal_ditails">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="hidden" name="id" id="id">
					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">No KTP</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="no_ktp" value="" id="no_ktp" class="form-control">
							</div>
						</div>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pelamar</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="nama" value="" id="nama" class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Domisili</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="alamat_domisili" value="" id="alamat_domisili"
									class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="email" value="" id="email" class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="tgl_lahir" value="" id="tgl_lahir"
									class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis kelamin</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="jenis_kelamin" value="" id="jenis_kelamin"
									class="form-control">
							</div>
						</div>
						<hr>
						<hr>
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="provinsi" value="" id="provinsi" class="form-control">
							</div>
						</div>
						<hr>
						<hr>


					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kabupaten</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="kabupaten" value="" id="kabupaten"
									class="form-control">
							</div>
						</div>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="kecamatan" value="" id="kecamatan"
									class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Kode Pos</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="kode_pos" value="" id="kode_pos" class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SD</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="sd" value="" id="sd" class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SMP</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="smp" value="" id="smp" class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">SMA</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="sma" value="" id="sma" class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Universitas</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="universitas" value="" id="universitas"
									class="form-control">
							</div>
						</div>
						<hr>
						<hr>

						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12">Pengalaman</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
								<input type readonly="text" name="pengalaman" value="" id="pengalaman"
									class="form-control">
							</div>
						</div>
						<hr>
						<hr>


					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal verifikasi -->
<div class="modal fade" id="verifikasi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content modal-sm">
			<form class="form-verifikasi" method="post">
				<div class="modal-header">
					<h5 class="modal-title"> Konfirmasi verifikasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- <input type="hidden" name="id" id="id" class="id_user"> -->
					<input type="text" name="id" id="id" class="id_user">
					<div class="text"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">close</button>
					<button type="submit" class="btn btn-primary">ya</button>
				</div>
			</form>
		</div>
	</div>
</div>


<script>
	function verifikasi(id) {
		$(".form-verifikasi").attr("action", '<?=base_url()?>c_perusahaan/updateStatus/verifikasi');
		$(".id_user").attr('hidden', true);
		$(".id_user").val(id);
		$(".text").text('yakin akan verifikasi data pelamar ini ?');
		$("#verifikasi").modal("show");
	}
	function cancel(id){
		$(".form-verifikasi").attr("action", '<?=base_url()?>c_perusahaan/updateStatus/cancel');
		$(".id_user").attr('hidden', true);
		$(".id_user").val(id);
		$(".text").text('yakin kan cancel pelamar ini ?');
		$("#verifikasi").modal("show");

	}


</script>

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

<script type="text/javascript">
	$(document).ready(function () {

		// e.preventDefault();

		// $('.btn_save').on('click', function (e) {

		// })

	})


	function save_admin() {

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
					}).then(function () {
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

<script>
	function ditailsPelamar(id) {
		$('#id').val(id);
		$.ajax({
			type: "post",
			url: "<?=base_url();?>c_perusahaan/showDitails",
			data: {
				id: id
			},
			dataType: "json",
			success: function (response) {
				// console.log(response);
				$('#no_ktp').val(response.no_ktp);
				$('#nama').val(response.nama);
				$('#alamat_domisili').val(response.alamat_domisili);
				$('#email').val(response.email);
				$('#tgl_lahir').val(response.tgl_lahir);
				$('#tempat_lahir').val(response.tempat_lahir);
				$('#jenis_kelamin').val(response.jenis_kelamin);
				$('#provinsi').val(response.provinsi);
				$('#kabupaten').val(response.kabupaten);
				$('#kecamatan').val(response.kecamatan);
				$('#kode_pos').val(response.kode_pos);
				$('#sd').val(response.sd);
				$('#smp').val(response.smp);
				$('#sma').val(response.sma);
				$('#universitas').val(response.universitas);
				$('#pengalaman').val(response.pengalaman);

				$('#ditails_pelamar').modal('show');
			}
		});
	}

</script>
