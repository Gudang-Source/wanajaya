<!-- Content Wrapper. Contains page content -->
<style type="text/css">
	<!--
	.style5 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 18px; }
-->
</style>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Detail Data Warga
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin/warga" ><i class="fa fa-users"></i>&nbsp; Data Warga</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Detail Data Warga</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<!-- left column -->
			<div class="col-md-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<!-- form start -->
					<?=form_open_multipart('admin/warga_lihat', 'role="form"')?>
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
									<input type="text" class="form-control" name="nama" value="<?=$wrg['nama']?>" maxlength="20" placeholder="Nama Warga" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Jenis Kelamin</label>
									<input type="text" class="form-control" name="jenkel" value="<?=$wrg['jenkel']?>" maxlength="20" placeholder="Jenis Kelamin" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Agama</label>
									<input type="text" class="form-control" name="agama" value="<?=$wrg['agama']?>" maxlength="20" placeholder="Agama" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" class="form-control" name="ttl" value="<?=$wrg['ttl']?>" maxlength="15" placeholder="Tempat Lahir" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" class="form-control" name="ttl" value="<?=$wrg['tgl']?>" maxlength="15" placeholder="Tanggal Lahir" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Status</label>
									<input type="text" class="form-control" name="status" value="<?=$wrg['status']?>" maxlength="15" placeholder="Status" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" class="form-control" name="pekerjaan" value="<?=$wrg['pekerjaan']?>" maxlength="15" placeholder="Pekerjaan" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Pendidikan</label>
									<input type="text" class="form-control" name="pendidikan" value="<?=$wrg['pendidikan']?>" maxlength="15" placeholder="Pendidikan" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kewarganegaraan</label>
									<input type="text" class="form-control" name="kewarganegaraan" value="<?=$wrg['kewarganegaraan']?>" maxlength="10" placeholder="Kewarganegaraan" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NO KK</label>
									<input type="text" class="form-control" name="no_kk" value="<?=$wrg['no_kk']?>" maxlength="20" placeholder="NO KK" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" class="form-control" name="alamat" value="<?=$wrg['alamat']?>" maxlength="150" placeholder="Alamat" readonly>
								</div>
							</div>
						</div>
						<?php
						$foto = 'default.jpg';
						if($wrg['foto'] && file_exists('assets/img/'.$wrg['foto'])) {
							$foto = $wrg['foto'];
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
				<?=form_close()?>
					<!-- form end -->
				</div>
				<!-- /.box -->
			</div>
		</div>
	</section>
					<div class="box-footer">

						<a href="<?=base_URL()?>admin/warga" class="btn btn-warning pull-right fa">Kembali </a>
					</div>
					<!-- /.content -->
				</div>
<!-- /.content-wrapper -->