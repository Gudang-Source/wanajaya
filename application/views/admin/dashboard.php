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
        <div class="col-md-8">
			 <!-- TABLE: LATEST ORDERS -->
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                    <th>Popularity</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-info">Processing</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-warning">Pending</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">Delivered</span></td>
                    <td>
                      <div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Call of Duty IV</td>
                    <td><span class="label label-success">Shipped</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-4">
			<div class="box box-danger">
				<div class="box-header with-border">
				<h3 class="box-title">Data Statistik Penduduk</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
				</div>
				<div class="box-body">
				<canvas id="pieChart" style="height:250px"></canvas>
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

