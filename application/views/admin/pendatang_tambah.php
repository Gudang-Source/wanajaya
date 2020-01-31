<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Data Warga Pendatang
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/pendatang" ><i class="fa fa-users"></i>&nbsp; Data Warga Pendatang</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah Data Warga Pendatang</li>
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
					<?=form_open_multipart('admin/pendatang_tambah', 'role="form"')?>
					<div class="row">
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NIK</label>
									<input type="text" class="form-control" name="nik" maxlength="20" placeholder="NIK" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="nama" maxlength="25" placeholder="Nama" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>No HP</label>
									<input type="text" class="form-control" name="nohp" maxlength="13" placeholder="No HP" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Keperluan</label>
									<input type="text" class="form-control" name="keperluan" maxlength="25" placeholder="Keperluan" required autofocus>
								</div>
							</div>
						</div>
						
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Foto Identitas</label>
									<input type="file" class="form-control" name="filefoto" placeholder="Foto">
									<p class="help-block"><i>Format File : jpg, JPG, jpeg, JPEG, png, PNG, gif, BMP &nbsp; | &nbsp; Ukuran : 2 MB</i></p>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Domisili</label>
									<input type="text" class="form-control" name="domisili" maxlength="150" placeholder="Domisili" required autofocus>
								</div>
							</div>
						</div>						
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success">Simpan</button>
						<a href="<?=base_URL()?>admin/pendatang" class="btn btn-warning pull-right">Batal</a>
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