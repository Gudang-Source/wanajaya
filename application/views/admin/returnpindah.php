<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			SALAH INPUT WARGA PINDAH
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><a href="<?=base_URL()?>admin/pindah" ><i class="fa fa-file"></i>&nbsp; Pembuatan Surat Pindah</a></li>
			<li class="active"><i class="fa fa-user"></i>&nbsp; Warga Telah Pindah</li>
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
					<?=form_open_multipart('admin/warga_pindah', 'role="form"')?>
					<div class="row">
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NIK</label>
									<input type="text" class="form-control" name="nik" value="<?=$wrg['nik']?>" maxlength="20" placeholder="NIK" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Nama Warga</label>
									<input type="text" class="form-control" name="nama" value="<?=$wrg['nama']?>" maxlength="30" placeholder="Nama Warga" readonly>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="text" class="form-control" name="jenkel" value="<?=$wrg['jenkel']?>" readonly>
									</div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Ubah Kondisi</label>
									<input type="text" class="form-control" name="kondisi" value="" placeholder="TIDAK PINDAH" readonly>
								</div>
							</div>
						</div>

					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success ">Tetapkan</button>
						<a href="<?=base_URL()?>admin/pindah" class="btn btn-warning pull-right">Batal</a>
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