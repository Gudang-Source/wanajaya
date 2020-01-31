<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Data Warga
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin2/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li><a href="<?=base_URL()?>admin2/warga" ><i class="fa fa-users"></i>&nbsp; Data Warga</a></li>
			<li class="active"><i class="fa fa-wpforms"></i>&nbsp; Tambah Data Warga</li>
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
					<?=form_open_multipart('admin2/warga_tambah', 'role="form"')?>
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
									<label>Jenis Kelamin</label>
									<select class="form-control" name="jenkel" required autofocus>
										<option value="">Pilih Jenis Kelamin</option>
										<option value="LAKI-LAKI">LAKI-LAKI</option>
										<option value="PEREMPUAN">PEREMPUAN</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Agama</label>
									<select class="form-control" name="agama" required autofocus>
										<option value="">Pilih Agama</option>
										<option value="ISLAM">ISLAM</option>
										<option value="KRISTEN">KRISTEN</option>
										<option value="KATOLIK">KATOLIK</option>
										<option value="HINDU">HINDU</option>
										<option value="BUDDHA">BUDDHA</option>
										<option value="KONG HU CU">KONG HU CU</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" class="form-control" name="ttl" maxlength="50" placeholder="Tempat Lahir" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<input type="date" class="form-control" name="tgl" maxlength="50" placeholder="Tanggal Lahir" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status" required autofocus>
										<option value="">Pilih Status</option>
										<option value="BELUM KAWIN">BELUM KAWIN</option>
										<option value="KAWIN">KAWIN</option>
										<option value="CERAI HIDUP">CERAI HIDUP</option>
										<option value="CERAI MATI">CERAI MATI</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Pekerjaan</label>
									<input type="text" class="form-control" name="pekerjaan" maxlength="15" placeholder="Pekerjaan" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Pendidikan</label>
									<input type="text" class="form-control" name="pendidikan" placeholder="Pendidikan" required autofocus>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>Kewarganegaraan</label>
									<select class="form-control" name="kewarganegaraan" required autofocus>
										<option value="WNI">WNI</option>
										<option value="WNA">WNA</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body">
								<div class="form-group">
									<label>NO KK</label>
									<div class="row">
										<div class="col-xs-10">
											<input type="text" class="form-control" id="no_kk" name="no_kk" maxlength="20" placeholder="NO KK" required readonly>
										</div>
										<div class="col-xs-2">
											<button type="button" class="btn btn-default" data-toggle="modal" data-target="#no_kkModal">. . .</button>
										</div>
									</div>
								</div>
							</div>
						</div>						
						<div class="col-md-7">
							<div class="box-body">
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" maxlength="200" placeholder="Alamat" required readonly>
								</div>
							</div>
						</div>
					</div>					
					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-success btn-flat">Simpan</button>
						<a href="<?=base_URL()?>admin2/warga" class="btn btn-warning btn-flat pull-right">Batal</a>
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

<!-- Modal no_kk -->
<div class="modal fade" id="no_kkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 align="center" class="modal-title" id="myModalLabel">NO KK</h4>
			</div>
			<div class="modal-body">
				<table id="lookup" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th style="text-align: center; width:">NO KK</th>
							<th>KEPALA KELUARGA</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach($kk as $k) { ?>
						<tr class="pilih" data-no_kk="<?=$k->no_kk?>" data-alamat="<?=$k->alamat?>">
							<td align="center"><?=$k->no_kk?></td>
							<td><?=$k->nama_kepala?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script src="<?=base_URL()?>assets/modal/js/jquery-1.11.2.min.js"></script>
<script src="<?=base_URL()?>assets/modal/datatables/jquery.dataTables.js"></script>
<!-- JS no_kk -->
<script type="text/javascript">
	$(document).on('click', '.pilih', function(e) {
		document.getElementById("no_kk").value = $(this).attr("data-no_kk");
		document.getElementById("alamat").value = $(this).attr("data-alamat");
		$('#no_kkModal').modal('hide');
	});
	$(function() {
		$("#lookup").dataTable();
	})
</script>
<style>
	.pilih:hover{
		cursor: pointer;
	}
</style>