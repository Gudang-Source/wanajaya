<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Data Admin Pengelola
			<small>Desa Mulyoagung</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/admin2" ><i class="fa fa-user"></i>&nbsp; Data Admin Pengelola</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Admin Pengelola</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<!-- form start -->
					<?=form_open_multipart('admin/admin2_edit', 'role="form"')?>
					<div class="row">
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>No ID</label>
									<input type="number" class="form-control" name="nid" value="<?=$adm2['nip']?>" maxlength="20" placeholder="No ID" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password" maxlength="50" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Admin</label>
									<input type="text" class="form-control" name="nama_admin2" value="<?=$adm2['nama_admin2']?>" maxlength="30" placeholder="Nama Admin" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Ganti Foto</label>
									<input type="file" class="form-control" name="filefoto" placeholder="Foto">
									<p class="help-block"><i>Format File : jpg, JPG, jpeg, JPEG, png, PNG, gif, BMP &nbsp; | &nbsp; Ukuran : 2 MB</i></p>
								</div>
							</div>
						</div>

						<?php
						$foto = 'default.jpg';
						if($adm2['foto'] && file_exists('assets/img/'.$adm2['foto'])) {
							$foto = $adm2['foto'];
						}
						?>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Foto Profil</label>
									<div class="fileupload-new thumbnail" class="img-responsive" style="width: 100px; height: 100px;">
										<img src="<?=base_URL().'assets/img/'.$foto?>" alt="foto profil" style="height: 90px;"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Update</button>
						<a href="<?=base_URL()?>admin/admin2" class="btn btn-warning btn-flat pull-right">Batal</a>
					</div>
					<?=form_close()?>
					<!-- form end -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->