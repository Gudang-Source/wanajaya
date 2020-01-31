<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Data Warga Pendatang
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin2/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin2/pendatang" ><i class="fa fa-users"></i>&nbsp; Data Warga Pendatang</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Edit Data Warga Pendatang</li>
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
					<?=form_open_multipart('admin2/pendatang_edit', 'role="form"')?>
					<div class="row">
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NIK</label>
									<input type="text" class="form-control" name="nik" value="<?=$pdt['nik']?>" maxlength="20" placeholder="NIK" readonly>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="nama" value="<?=$pdt['nama']?>" maxlength="30" placeholder="Nama" required autofocus>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>No HP</label>
									<input type="text" class="form-control" name="nohp" value="<?=$pdt['nohp']?>" maxlength="15" placeholder="No HP">
								</div>
							</div>
						</div>
						
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Keperluan</label>
									<input type="text" class="form-control" name="keperluan" value="<?=$pdt['keperluan']?>" maxlength="15" placeholder="Keperluan">
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="box-body">
								<div class="form-group">
									<label>Domisili</label>
									<input type="text" class="form-control" name="domisili" value="<?=$pdt['domisili']?>" maxlength="150" placeholder="Domisili">
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
						if($pdt['foto'] && file_exists('assets/img/'.$pdt['foto'])) {
							$foto = $pdt['foto'];
						}
						?>
						<div class="col-md-6">
							<div class="box-body">
								<div class="form-group">
									<label>Foto Identitas</label>
									<div class="fileupload-new thumbnail" class="img-responsive" style="width: 100px; height: 100px;">
										<img src="<?=base_URL().'assets/img/'.$foto?>" alt="foto profil" style="height: 90px;"/>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success ">Update</button>
						<a href="<?=base_URL()?>admin2/pendatang" class="btn btn-warning pull-right">Batal</a>
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