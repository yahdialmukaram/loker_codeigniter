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
