<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<span class="style4">ADMIN PENGELOLA
				<small>SISTEM ADMINISTRASI KEPENDUDUKAN</small></span>
			</h1>
			<ol class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i>&nbsp; Home</a></li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<a href="<?=base_URL()?>admin/warga" ><span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span></a>
						<div class="info-box-content">
							<span class="info-box-text">JUMLAH WARGA</span>
							<span class="info-box-number"><?=$wrg?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<a href="<?=base_URL()?>admin/kk" ><span class="info-box-icon bg-aqua"><i class="fa fa-book"></i></span></a>
						<div class="info-box-content">
							<span class="info-box-text">Jumlah KK</span>
							<span class="info-box-number"><?=$kk?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<a href="<?=base_URL()?>admin/pendatang" ><span class="info-box-icon bg-green"><i class="fa fa-users"></i></span></a>
						<div class="info-box-content">
							<span class="info-box-text">Pendatang</span>
							<span class="info-box-number"><?=$pdt?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<!-- fix for small devices only -->
				<div class="clearfix visible-sm-block"></div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="info-box">
						<a href="<?=base_URL()?>admin/admin2" ><span class="info-box-icon bg-red"><i class="fa fa-user"></i></span></a>
						<div class="info-box-content">
							<span class="info-box-text">ADMIN PENGELOLA</span>
							<span class="info-box-number"><?=$adm2?></span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>

				<!-- /.col -->
			</div>
	
      <div class="row">
       <img src="<?=base_URL()?>assets/img/bjn.jpg" width="100%" height="55%">
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
	</div>
<!-- /.content-wrapper -->

