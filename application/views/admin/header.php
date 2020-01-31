<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_URL()?>assets/css/skins/skin-blue.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/iCheck/all.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <?php
    $usr = $this->db->get_where('tbl_admin', array('username' => $this->session->userdata('username')))->row_array();
    $foto = 'default.jpg';
    if($usr['foto'] && file_exists('assets/img/'.$usr['foto'])) {
     $foto = $usr['foto'];
   }

   ?>
 </head>
 <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
 <!-- the fixed layout is not compatible with sidebar-mini -->
 <body class="hold-transition skin-blue fixed sidebar-mini">
   <!-- Site wrapper -->
   <div class="wrapper">
     <header class="main-header">
       <!-- Logo -->
       <a href="javascript:void(0)" class="logo">
         <!-- mini logo for sidebar mini 50x50 pixels -->
         <span class="logo-mini"><b>P</b>A</span>
         <!-- logo for regular state and mobile devices -->
         <span class="logo-lg"><b>PANEL</b> ADMIN</span>
       </a>

       <!-- Header Navbar: style can be found in header.less -->
       <nav class="navbar navbar-static-top">
         <!-- Sidebar toggle button-->
         <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </a>

         <div class="navbar-custom-menu">
           <ul class="nav navbar-nav">
             <!-- User Account: style can be found in dropdown.less -->
             <li class="dropdown user user-menu">
               <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                 <img src="<?=base_URL().'assets/img/'.$foto?>" class="user-image" alt="Foto Profil">
                 <span class="hidden-xs"><?=$usr['nama_admin']?></span>
               </a>

               <ul class="dropdown-menu">
                 <!-- User image -->
                 <li class="user-header">
                   <img src="<?=base_URL().'assets/img/'.$foto?>" class="img-circle" alt="Foto Profil">

                   <p>
                    <strong><?=$usr['nama_admin']?></strong>
                    <small>ADMIN UTAMA</small>
                  </p>
                </li>

                <!-- Menu Footer-->
                <li class="user-footer">
                 <div class="pull-left">
                   <a href="<?=base_URL()?>admin/profil_saya" class="btn btn-default btn-flat">Profil Saya</a>
                 </div>
                 <div class="pull-right">
                   <a href="<?=base_URL()?>auth/keluar" class="btn btn-default btn-flat">Keluar</a>
                 </div>
               </li>
             </ul>
           </li>
           <!-- Control Sidebar Toggle Button -->
         </ul>
       </div>
     </nav>
   </header>
   <!-- =============================================== -->
   <!-- Left side column. contains the sidebar -->
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
       <div class="pull-left image">
         <img src="<?=base_URL().'assets/img/'.$foto?>" class="img-circle" alt="Foto Profil">
       </div>
       <div class="pull-left info">
         <p><?=$usr['nama_admin']?></p>
         <a href="javascript:void(0)"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>
     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MENU UTAMA</li>
       <li <?php if($this->uri->segment(2)=="dashboard") { echo 'class="active"'; } ?>>
         <a href="<?=base_URL()?>admin/dashboard"><i class="fa fa-home"></i> <span>Home</span></a>
       </li>
       <li <?php if($this->uri->segment(2)=="warga" || $this->uri->segment(2)=="warga_tambah" || $this->uri->segment(2)=="warga_edit" || $this->uri->segment(2)=="admin2" || $this->uri->segment(2)=="admin2_tambah" || $this->uri->segment(2)=="admin2_edit" || $this->uri->segment(2)=="kk"|| $this->uri->segment(2)=="kk_tambah" || $this->uri->segment(2)=="kk_edit" || $this->uri->segment(2)=="pendatang"|| $this->uri->segment(2)=="pendatang_tambah" || $this->uri->segment(2)=="pendatang_edit") { echo 'class="treeview active"'; } else { echo 'class="treeview"'; } ?>>
        <a href="javascript:void(0)">
          <i class="fa fa-database"></i> <span>Master Data</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li <?php if($this->uri->segment(2)=="warga" || $this->uri->segment(2)=="warga_tambah" || $this->uri->segment(2)=="warga_edit") { echo 'class="active"'; } ?>>
            <a href="<?=base_URL()?>admin/warga"><i class="fa fa-users"></i>Warga</a> 
          </li>
          <li <?php if($this->uri->segment(2)=="kk" || $this->uri->segment(2)=="kk_tambah" || $this->uri->segment(2)=="kk_edit") { echo 'class="active"'; } ?>>
            <a href="<?=base_URL()?>admin/kk"><i class="fa fa-book"></i>Kartu Keluarga</a> 
          </li>
          <li <?php if($this->uri->segment(2)=="pendatang" || $this->uri->segment(2)=="pendatang_tambah" || $this->uri->segment(2)=="pendatang_edit") { echo 'class="active"'; } ?>>
            <a href="<?=base_URL()?>admin/pendatang"><i class="fa fa-users"></i>Pendatang</a> 
          </li>
          <li <?php if($this->uri->segment(2)=="admin2" || $this->uri->segment(2)=="admin2_tambah" || $this->uri->segment(2)=="admin2_edit") { echo 'class="active"'; } ?>>
            <a href="<?=base_URL()?>admin/admin2"><i class="fa fa-user"></i>Admin Pengelola</a>
          </li>
        </ul>
      </li>      
      <li <?php if($this->uri->segment(2)=="ektp") { echo 'class="active"'; } ?>>
        <a href="<?=base_URL()?>admin/ektp"><i class="fa fa-id-card"></i> <span>Pengantar KK</span></a>
      </li>

      <li <?php if($this->uri->segment(2)=="ektp") { echo 'class="active"'; } ?>>
        <a href="<?=base_URL()?>admin/ektp"><i class="fa fa-id-card"></i> <span>Pengantar KTP</span></a>
      </li>
      <li <?php if($this->uri->segment(2)=="kelahiran") { echo 'class="active"'; } ?>>
        <a href="<?=base_URL()?>admin/kelahiran"><i class="fa fa-file-text"></i> <span>Keterangan Kelahiran</span></a>
  </li>
      <li <?php if($this->uri->segment(2)=="skematian") { echo 'class="active"'; } ?>>
        <a href="<?=base_URL()?>admin/skematian"><i class="fa fa-user-times"></i> <span>Keterangan Kematian</span></a>
      </li>
      <li <?php if($this->uri->segment(2)=="pindah") { echo 'class="active"'; } ?>>
        <a href="<?=base_URL()?>admin/pindah"><i class="fa fa-exchange"></i> <span>Pindah Tempat</span></a>
      </li>
      <li class="header">MENU PENGGUNA</li>
      <li <?php if($this->uri->segment(2)=="profil_saya") { echo 'class="active"'; } ?>>
        <a href="<?=base_URL()?>admin/profil_saya"><i class="fa fa-user-circle text-aqua"></i> <span>Profil Saya</span></a>
      </li>
      <li><a href="<?=base_URL()?>auth/keluar"><i class="fa fa-sign-out text-red"></i> <span>Keluar</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
