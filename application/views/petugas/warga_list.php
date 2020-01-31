<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Warga
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin2/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li class="active"><i class="fa fa-users"></i>&nbsp; Data Warga</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">

		<?php
		if ($this->session->flashdata('simpan')) {
			echo "<div class='callout callout-success' id='alert'>
			<h4><i class='icon fa fa-check'></i>&nbsp; BERHASIL</h4>
			<p>".$this->session->flashdata('simpan')."</p>
		</div>";

	} else if ($this->session->flashdata('gagal')) {
		echo "<div class='callout callout-danger' id='alert'>
		<h4><i class='icon fa fa-ban'></i>&nbsp; GAGAL</h4>
		<p>".$this->session->flashdata('gagal')."</p>
	</div>";

} else if ($this->session->flashdata('salah')) {
	echo "<div class='callout callout-warning' id='alert'>
	<h4><i class='icon fa fa-warning'></i>&nbsp; PERINGATAN</h4>
	<p>".$this->session->flashdata('salah')."</p>
</div>";
}
?>

<!-- Info boxes -->
<div class="box box-primary">
	<div class="box-header">
		<h3 class="box-title">
			<a href="<?=base_URL()?>admin2/warga_tambah" class="btn btn-primary "><i class="fa fa-plus"></i>&nbsp; Tambah</a>
		</h3>
		</div>

		<!-- /.box-header -->
		<div class="box-body">
		<div  class="table-responsive">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th><center>NIK</center></th>
					    <th><center>NAMA</center></th>
						<th><center>ALAMAT</center></th>
						<th><center>JENIS KELAMIN</center></th>
					    <th><center>TEMPAT LAHIR</center></th>
						<th><center>TANGGAL LAHIR</center></th>
						<th><center>AGAMA</center></th>
					    <th><center>STATUS</center></th>
						<th><center>PEKERJAAN</center></th>
						<th><center>PENDIDIKAN</center></th>
						<th><center>KEWARGANEGARAAN</center></th>
					    <th><center>NO KK</center></th>
						<th><center>AKSI</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
					;
					foreach($wrg as $w) :
						?>
					<?php
				$foto = 'default.jpg';
				if($w->foto && file_exists('assets/img/'.$w->foto)) {
					$foto = $w->foto;
				}
				?>

					<tr>

						<td align="center"><?=$w->nik?></td>
						<td align="center"><?=$w->nama?></td>
						<td align="center"><?=$w->alamat?></td>
						<td align="center"><?=$w->jenkel?></td>
						<td align="center"><?=$w->ttl?></td>
						<td align="center"><?=$w->tgl?></td>
						<td align="center"><?=$w->agama?></td>
						<td align="center"><?=$w->status?></td>
						<td align="center"><?=$w->pekerjaan?></td>
						<td align="center"><?=$w->pendidikan?></td>
						<td align="center"><?=$w->kewarganegaraan?></td>
						<td align="center"><?=$w->no_kk?></td>
						<td align="center">
							<a href="<?=base_URL()?>admin2/warga_edit/<?=$w->nik?>" class="btn btn-xs btn-warning " title="Edit Data"><i class="fa fa-edit"></i></a>
							<a href="<?=base_URL()?>admin2/warga_hapus/<?=$w->nik?>" onclick="return confirm('Anda yakin ingin menghapus Data Warga ini?')" class="btn btn-xs btn-danger " title="Hapus Data"><i class="fa fa-trash"></i></a>
							</td>
						</tr>

						<?php ; endforeach; ?>
					</tbody>
				</table>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<!-- /.box -->
	</div>
	<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->