<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Admin Pengelola
			<small>DESA WANAJAYA</small>
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
	<div class="box-header">
		<h3 class="box-title">
			<a href="<?=base_URL()?>admin/admin2_tambah" class="btn btn-primary "><i class="fa fa-plus"></i>&nbsp; Tambah</a>
		</h3>
	</div>
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
					<th><center>Aksi</center></th>
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
					<td align="center"><?=$d->nip?></td>
					<td align="center"><?=$d->nama_petugas?></td>
					<td align="center">
						<a href="<?=base_URL()?>admin/admin2_edit/<?=$d->nip?>" class="btn btn-xs btn-warning " title="Edit Data"><i class="fa fa-edit"></i></a>
						<a href="<?=base_URL()?>admin/admin2_hapus/<?=$d->nip?>" onclick="return confirm('Anda yakin ingin menghapus Data ini?')" class="btn btn-xs btn-danger " title="Hapus Data"><i class="fa fa-trash"></i></a>
					</td>
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
