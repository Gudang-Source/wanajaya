<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Data KK
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/kk" ><i class="fa fa-book"></i>&nbsp; Data KK</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah Data KK</li>
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
					<?=form_open_multipart('admin/kk_tambah', 'role="form"')?>
					<div class="row">
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NO KK</label>
									<input type="text" class="form-control" name="no_kk" maxlength="20" placeholder="NO KK" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kepala Keluarga</label>
									<input type="text" class="form-control" name="nama_kepala" maxlength="25" placeholder="Nama" required autofocus>
								</div>
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" class="form-control" name="alamat" maxlength="150" placeholder="Alamat" required autofocus>
								</div>
							</div>
						</div>						
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
						<a href="<?=base_URL()?>admin/kk" class="btn btn-warning btn-flat pull-right">Batal</a>
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