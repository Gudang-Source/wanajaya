<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			WARGA TELAH PINDAH
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin2/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><a href="<?=base_URL()?>admin2/pindah" ><i class="fa fa-file"></i>&nbsp; Pembuatan Surat Pindah</a></li>
			<li class="active"><i class="fa fa-user-times"></i>&nbsp; Warga Telah Pindah</li>
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
					<?=form_open_multipart('admin2/warga_pindah', 'role="form"')?>
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
									<input type="text" class="form-control" name="kondisi" value="PINDAH" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>RT / RW</label>
									<input type="text" class="form-control" name="pindahrt" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Desa</label>
									<input type="text" class="form-control" name="pindahdesa" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kecamatan</label>
									<input type="text" class="form-control" name="pindahkec" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kabupaten</label>
									<input type="text" class="form-control" name="pindahkab" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Provinsi</label>
									<input type="text" class="form-control" name="pindahprov" required autofocus>
								</div>
							</div>
						</div>
						</div>

					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success ">Tetapkan</button>
						<a href="<?=base_URL()?>admin2/pindah" class="btn btn-warning pull-right">Batal</a>
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