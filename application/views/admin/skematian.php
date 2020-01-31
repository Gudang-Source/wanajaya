<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			 Pembuatan Surat Kematian Warga
			<small>DESA WANAJAYA</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li class="active"><i class="fa fa-user-times"></i>&nbsp;Pembuatan Surat Kematian</li>
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
			<a href="<?=base_URL()?>admin/listwargawafat" class="btn btn-primary "><i class="fa fa-file-text"></i>&nbsp; LIHAT DATA WARGA TELAH WAFAT</a>
		</h3>
		</div>

	<!-- /.box-header -->
	<div class="box-body">
	<div  class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th width="20%"><center>NIK</center></th>
					<th width="25%"><center>NAMA</center></th>
					<th width="45%"><center>ALAMAT</center></th>
					<th width="10%"><center>AKSI</center></th>
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
					<td align="center">
						<a href="<?=base_URL()?>admin/warga_wafat/<?=$w->nik?>" class="btn btn-xs btn-danger " title="Ubah Kondisi"><i class="fa fa-star"></i></a>
					</td>
				</tr>

				<?php ; endforeach; ?>
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
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