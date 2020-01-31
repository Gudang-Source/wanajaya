<!-- Content Wrapper. Contains page content -->
<style type="text/css">
	<!--
	.style5 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 18px; }
-->
</style>
<!-- Main content -->
<section class="content">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        E-KTP
        <small>Cetak Surat Pengantar</small>
      </h1>
    </section>
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <img src="<?=base_URL()?>assets/img/bjn.jpg" width="100%" height="55%">
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row">
        <div class="col-xs-6">
          <address>
            <strong>
            Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; 475/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/513.2016/<?php echo bulanrom() ?>/<?php echo tahun() ?><br>
              Sifat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; -<br>
              Hal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <u>Permohonan rekam E – KTP </u><br>
            </strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <address>
            <strong>
              Wanajaya,
              <?php echo tanggal() ?>
              
              <br>
              Kepada&nbsp;&nbsp;&nbsp;&nbsp;:<br>
              Yth.Dinas Kependudukan dan Catatan Sipil Kab Bekasi<br>
              Di : &nbsp;-<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kab. Bekasi
            </strong>
          </address>
        </div>
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kami Kepala  Desa Wanajaya Kecamatan  Cibitung 
              Kabupaten Bekasi, menerangkan dengan sesungguhnya bahwa  :
            </p>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td >&nbsp;</td>
                  <td>&nbsp;</td>
                  <td class="col-xs-3 table-responsive">NIK</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['nik']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Nama</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['nama']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Tempat Tanggal Lahir</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['ttl']?> , <?php echo tgl_indo($wrg['tgl']);?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Pekerjaan</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['pekerjaan']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Jenis Kelamin</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['jenkel']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Status Perkawinan</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['status']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Kewarganegaraan</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['kewarganegaraan']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Agama</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['agama']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Alamat</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$wrg['alamat']?></td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa orang dengan data tersebut diatas belum melakukan rekam E-KTP dan mohon untuk di rekam E-KTP. Demikian untuk menjadikan periksa</p>
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-4">
          </div>
          <div class="col-xs-4">
          </div>
          <!-- /.col -->
          <div class="col-xs-4">

           <p align="center"><b>Kepala Desa Wanajaya</p>
           <br>
           <br>
           <br>
           <p align="center"><u>NURDIN</u></b><p>
           </div>
           <!-- /.col -->
         </div>
         <!-- /.row -->

         <!-- this row will not appear when printing -->
         <div class="row no-print">
          <div class="col-xs-12">
            <a href="javascript:window.print()" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          </div>
        </div>
      </section>
      <!-- /.content -->
      <div class="clearfix"></div>
    </div>
  <!-- /.content-wrapper -->