<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Admin Pengelola
			<small>DESA MULYOAGUNG</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin2/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li class="active"><i class="fa fa-user"></i>&nbsp; Data Admin Pengelola</li>
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
		<!-- /.box-header -->
	<div class="box-body">
	<div  class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="10%"><center>No</center></th>
					<th><center>Foto</center></th>
					<th><center>No ID</center></th>
					<th><center>Nama</center></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach($adm2 as $d) :
					?>
				<?php
				$foto = 'default.jpg';
				if($d->foto && file_exists('assets/img/'.$d->foto)) {
					$foto = $d->foto;
				}
				?>
				<tr>
					<td align="center"><?=$no?>.</td>
					<td align="center">
						<img src="<?=base_URL().'assets/img/'.$foto?>" class="img-circle" alt="foto profil" style="height: 40px; width: 40px"/>
					</td>
					<td align="center"><?=$d->nid?></td>
					<td align="center"><?=$d->nama_admin2?></td>
					</tr>
				<?php $no++; endforeach; ?>
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
