<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Data Kartu Keluarga
			<small>DESA WANAJAYA</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?=base_URL()?>admin/dashboard" ><i class="fa fa-home"></i>&nbsp; Home</a></li>
			<li><i class="fa fa-database"></i>&nbsp; Master Data</li>
			<li class="active"><i class="fa fa-book"></i>&nbsp; Data KK</li>
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
			<a href="<?=base_URL()?>admin/kk_tambah" class="btn btn-primary "><i class="fa fa-plus"></i>&nbsp; Tambah</a>
		</h3>

		    </div>

		<!-- /.box-header -->
	<div class="box-body">
	<div  class="table-responsive">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
						<th width="20%"><center>NO KK</center></th>
					    <th width="20%"><center>KEPALA KELUARGA</center></th>
						<th width="45%"><center>ALAMAT</center></th>
						<th width="15%"><center>AKSI</center></th>
					</tr>
				</thead>
				<tbody>
					<?php
					;
					foreach($kk as $k) :
						?>
					<tr>
					<td align="center"><?=$k->no_kk?></td>
					<td align="center"><?=$k->nama_kepala?></td>
					<td align="center"><?=$k->alamat?></td>
					<td align="center">
							<a href="<?=base_URL()?>admin/kk_edit/<?=$k->no_kk?>" class="btn btn-xs btn-warning " title="Edit Data"><i class="fa fa-edit"></i></a>
							<a href="<?=base_URL()?>admin/kk_hapus/<?=$k->no_kk?>" onclick="return confirm('Anda yakin ingin menghapus Data KK ini?')" class="btn btn-xs btn-danger " title="Hapus Data"><i class="fa fa-trash"></i></a></td>
						</tr>
				<?php endforeach; ?>
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
