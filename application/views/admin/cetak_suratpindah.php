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
        Surat Keterangan Pindah Tempat
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
            <h2><u>SURAT KETERANGAN PINDAH TEMPAT</u></h2>
            <strong>
              Nomor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;475/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/513.2016/<?php echo bulanrom() ?>/<?php echo tahun() ?></strong>
            </address>
          </div>

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan dibawah ini saya Kepala Desa Mulyoagung Kecamatan Balen Kabupaten Bojonegoro, menerangkan dengan sesungguhnya bahwa :
              </p>
              <table>
                <tbody>
                  <tr>
                    <td class="col-xs-2 table-responsive">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Nama</td>
                    <td>:&nbsp;&nbsp;&nbsp;</td>
                    <td colspan="3"><?=$wrg['nama']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Jenis Kelamin</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['jenkel']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Tempat dan tanggal lahir</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['ttl']?> , <?php echo tgl_indo($wrg['tgl']);?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Kewarganegaraan</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['kewarganegaraan']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Agama</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['agama']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Status</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['status']?></td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Pekerjaan</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['pekerjaan']?></td>
                  </tr>
                  <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Pendidikan</td>
                      <td>:</td>
                      <td colspan="3"><?=$wrg['pendidikan']?></td>
                    </tr>
                    <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td class="col-xs-3 table-responsive">Alamat Asal</td>
                    <td>:</td>
                    <td colspan="3"><?=$wrg['alamat']?></td>
                  </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Nomor KTP/NIK</td>
                      <td>:</td>
                      <td colspan="3"><?=$wrg['nik']?></td>
                  </tr>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Pindah Ke</td>
                      <td>:</td>
                      <td>RT / RW</td>
                      <td>:</td>
                      <td><?=$wrg['pindahrt']?></td>
                    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td>Desa</td>
                      <td>:</td>
                      <td><?=$wrg['pindahdesa']?></td>
                    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td>Kecamatan</td>
                      <td>:</td>
                      <td><?=$wrg['pindahkec']?></td>
                    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td>Kabupaten</td>
                      <td>:</td>
                      <td><?=$wrg['pindahkab']?></td>
                    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td>Provinsi</td>
                      <td>:</td>
                      <td><?=$wrg['pindahprov']?></td>
                    </tr>
                    <tr>
                      <td colspan="4">&nbsp;</td>
                      <td>Per Tanggal</td>
                      <td>:</td>
                      <td><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td class="col-xs-3 table-responsive">Alasan Pindah</td>
                      <td>:</td>
                      <td colspan="3"><input type="text" class="form-control no-border" align="left" placeholder="Ketik" maxlength="100"></td>
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

                 <p align="center">Mulyoagung,
                  <?php echo tanggal() ?><br>
                  <b>Kepala Desa Mulyoagung</p>
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