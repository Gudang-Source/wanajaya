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
        SURAT KETERANGAN
        <small>Tinggal Sementara</small>
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
              Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;475/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/513.2016/<?php echo bulanrom() ?>/<?php echo tahun() ?><br>
              Sifat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;-<br>
              Hal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp; <u>Surat Keterangan Tinggal Sementara</u><br>
            </strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <address>
            <strong>
              Mulyoagung,
              <?php echo tanggal() ?>
              <br>
            </strong>
          </address>
        </div>
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini kami Kepala  Desa Mulyoagung Kecamatan  Balen 
              Kabupaten Bojonegoro, menerangkan dengan sesungguhnya bahwa  :
            </p>
            <br>
            <table class="table table-striped">
              <tbody>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td class="col-xs-2 table-responsive">NIK</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$pdt['nik']?></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>Nama</td>
                  <td>:&nbsp;&nbsp;&nbsp;</td>
                  <td><?=$pdt['nama']?></td>
                </tr>
              </tbody>
            </table>
            <br>
            <br>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bahwa orang dengan data tersebut diatas benar bertempat tinggal di <b><?=$pdt['domisili']?></b> untuk sementara dengan keperluan <b><?=$pdt['keperluan']?></b>. Demikian surat keterangan ini agar digunakan sebagaimana mestinya.</p>
        <br>
        <br>
        <div class="row">
          <!-- accepted payments column -->
          <div class="col-xs-4">
          </div>
          <div class="col-xs-4">
          </div>
          <!-- /.col -->
          <div class="col-xs-4">

           <p align="center"><b>Kepala Desa Mulyoagung</p>
           <br>
           <br>
           <br>
           <br>
           <p align="center"><u>SUJARTIKNAN,S.Sos</u></b><p>
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