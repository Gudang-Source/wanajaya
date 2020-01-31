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
        Surat Kematian
        <small>Cetak Surat</small>
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
        <div class="col-xs-12" align="center">
          <address>
            <h2><u>SURAT KEMATIAN</u></h2>
            <strong>
              Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;475/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/513.2016/<?php echo bulanrom() ?>/<?php echo tahun() ?></strong>
            </address>
          </div>

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini saya Kepala Desa Wanajaya Kecamatan Cibitung Kabupaten Bekasi, menerangkan dengan sesungguhnya bahwa :
              </p>
              <table>
                <tbody>
                  <tr>
                    <td class="col-xs-2 table-responsive">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Nama</td>
                    <td>:&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><?=$wrg['nama']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Umur</td>
                    <td>:</td>
                    <td>&nbsp;</td>
                    <td><?=$wrg['ttl']?> , <?php echo tgl_indo($wrg['tgl']);?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Jenis Kelamin</td>
                    <td>:</td>
                    <td>&nbsp;</td>
                    <td><?=$wrg['jenkel']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Alamat</td>
                    <td>:</td>
                    <td>&nbsp;</td>
                    <td><?=$wrg['alamat']?></td>
                  </tr>
                  <tr>
                    <td colspan="6">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="6">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telah meningal dunia pada :</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Hari</td>
                      <td>:</td>
                      <td colspan="2"><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Tanggal</td>
                      <td>:</td>
                      <td colspan="2"><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Di</td>
                      <td>:</td>
                      <td colspan="2"><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
                    </tr>
                    <tr>
                      <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="6">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Surat keterangan ini dibuat atas dasar yang sebenarnya :</td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="col-xs-3 table-responsive">Nama Pelapor</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="col-xs-3 table-responsive">Hubungan dengan yang meninggal</td>
                        <td>:</td>
                        <td colspan="2"><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <br>
              <br>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat keterangan ini kami buat dan dapat digunakan sebagaimana perlunya.</p>
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-xs-4">
                </div>
                <div class="col-xs-4">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">

                 <p align="center">Wanajaya,
                  <?php echo tanggal() ?><br>
                  <b>Kepala Desa Wanajaya</p>
                   <br>
                   <br>
                   <br>
                   <p align="center"><u>Nurdin</u></b><p>
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
