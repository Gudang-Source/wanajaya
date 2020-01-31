<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin2 extends CI_Controller {

 public function __construct() {
   parent::__construct();
   sesiadmin2();
   $this->load->model('m_admin2');
   $this->load->model('m_kk');
   $this->load->model('m_warga');
   $this->load->model('m_pendatang');
 }

 public function index() {
   redirect('admin2/dashboard','refresh');
 }

    //dashboard
 public function dashboard() {
   $data = array(
    'title' => 'DASHBOARD | ADMIN SAKDES',
    'adm2'   => $this->db->query("SELECT * FROM tbl_admin2")->num_rows(),
    'kk'   => $this->db->query("SELECT * FROM tbl_kk")->num_rows(),
    'wrg'   => $this->db->query("SELECT * FROM tbl_warga WHERE kondisi=''")->num_rows(),
    'pdt'   => $this->db->query("SELECT * FROM tbl_pendatang")->num_rows()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/dashboard');
   $this->load->view('admin2/footer');
 }

 

    //list admin2
 public function admin2() {
   $data = array(
    'title' => 'DATA ADMIN PENGELOLA',
    'adm2'   => $this->m_admin2->data()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/admin2_list');
   $this->load->view('admin2/footer');
 }



//list warga
public function warga() {
 $data = array(
  'title' => 'DATA WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/warga_list');
 $this->load->view('admin2/footer');
}

    //tambah warga
public function warga_tambah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->simpan($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Data warga baru berhasil tersimpan ...');
  redirect('admin2/warga');
} else {
  $data = array(
   'title' => 'TAMBAH DATA WARGA',
   'kk' => $this->m_kk->data()   
   );
  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/warga_tambah');
  $this->load->view('admin2/footer');
}
}

//lihat warga
public function warga_lihat() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail warga');
  redirect('admin2/warga');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'DETAIL DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/warga_lihat');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/warga');
 }
}
}

    //edit warga
public function warga_edit() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->update($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin2/warga');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array(),
    'kk' => $this->m_kk->data()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/warga_edit');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/warga');
 }
}
}


//list wafat
 public function listwargawafat() {
   $data = array(
    'title' => 'DATA WARGA TELAH WAFAT',
    'wrg'   => $this->m_warga->data_wafat()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/listwargawafat');
   $this->load->view('admin2/footer');
 }

//edit warga wafat
public function warga_wafat() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->telahwafat($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin2/listwargawafat');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/warga_wafat');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/listwargawafat');
 }
}
}

//edit warga wafat
public function returnwafat() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->masihhidup($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin2/listwargawafat');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/returnwafat');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/listwargawafat');
 }
}
}


    //hapus warga
public function warga_hapus() {
 if ($nik = $this->uri->segment(3)) {
  if(!empty($nik)) {
   $this->db->where('nik', $nik);
   $this->db->delete('tbl_warga');
 }
 $this->session->set_flashdata('Hapus', 'Warga berhasil terhapus ...');
 redirect('admin2/warga');
} else {
  redirect('admin2/warga');
}
}

//list pendatang
public function pendatang() {
 $data = array(
  'title' => 'DATA WARGA PENDATANG',
  'pdt'   => $this->m_pendatang->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/pendatang_list');
 $this->load->view('admin2/footer');
}

    //tambah pendatang
public function pendatang_tambah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_pendatang->simpan($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Data pendatang baru berhasil tersimpan ...');
  redirect('admin2/pendatang');
} else {
  $data = array(
   'title' => 'TAMBAH DATA WARGA PENDATANG'
   );
  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/pendatang_tambah');
  $this->load->view('admin2/footer');
}
}

//lihat pendatang
public function surat_tinggal_sementara() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_pendatang->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail pendatang');
  redirect('admin2/pendatang');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'DETAIL DATA WARGA PENDATANG',
    'pdt'   => $this->db->get_where('tbl_pendatang', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/surat_tinggal_sementara');
   $this->load->view('admin2/footerx');
 } else {
   redirect('admin2/pendatang');
 }
}
}

    //edit pendatang
public function pendatang_edit() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_pendatang->update($uploadFoto);
  $this->session->set_flashdata('Edit', 'pendatang berhasil diperbaharui ...');
  redirect('admin2/pendatang');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA PENDATANG',
    'pdt'   => $this->db->get_where('tbl_pendatang', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/pendatang_edit');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/pendatang');
 }
}
}

    //hapus pendatang
public function pendatang_hapus() {
 if ($nik = $this->uri->segment(3)) {
  if(!empty($nik)) {
   $this->db->where('nik', $nik);
   $this->db->delete('tbl_pendatang');
 }
 $this->session->set_flashdata('Hapus', 'Pendatang berhasil terhapus ...');
 redirect('admin2/pendatang');
} else {
  redirect('admin2/pendatang');
}
}


 //list kk
public function kk() {
 $data = array(
  'title' => 'DATA KARTU KELUARGA',
  'kk'   => $this->m_kk->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/kk_list');
 $this->load->view('admin2/footer');
}
  //tambah kk
public function kk_tambah() {
 if (isset($_POST['submit'])) {
  $this->m_kk->simpan();
  $this->session->set_flashdata('Simpan', 'KK baru berhasil tersimpan ...');
  redirect('admin2/kk');
} else {
  $data = array(
   'title' => 'TAMBAH DATA KARTU KELUARGA'
   );
  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/kk_tambah');
  $this->load->view('admin2/footer');
}
}

  //edit kk
public function kk_edit() {
 if (isset($_POST['submit'])) {
  $this->m_kk->update();
  $this->session->set_flashdata('Edit', 'KK berhasil diperbaharui ...');
  redirect('admin2/kk');
} else {
  if ($no_kk = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA KART KELUARGA',
    'kk' => $this->db->get_where('tbl_kk', array('no_kk' => $no_kk))->row_array(),
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/kk_edit');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/kk');
 }
}
}

  //hapus kk
public function kk_hapus() {
 if ($no_kk = $this->uri->segment(3)) {
  if(!empty($no_kk)) {
   $this->db->where('no_kk', $no_kk);
   $this->db->delete('tbl_kk');
 }
 $this->session->set_flashdata('Hapus', 'KK berhasil terhapus ...');
 redirect('admin2/kk');
} else {
  redirect('admin2/kk');
}
}


//list ektp
public function ektp() {
 $data = array(
  'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/ektp_list');
 $this->load->view('admin2/footer');
}

//baru ektp
public function ektp_baru() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail warga');
  redirect('admin2/ektp');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/ektp_baru');
   $this->load->view('admin2/footerx');
 } else {
   redirect('admin2/ektp');
 }
}
}

//cetak ektp
public function ektp_cetak() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail warga');
  redirect('admin2/ektp');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/ektp_cetak');
   $this->load->view('admin2/footerx');
 } else {
   redirect('admin2/ektp');
 }
}
}


//list domisili
public function domisili() {
 $data = array(
  'title' => 'PEMBUATAN SURAT DOMISILI WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/domisili');
 $this->load->view('admin2/footer');
}

//cetak domisili
public function cetak_domisili() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Cetak', 'Data detail warga');
  redirect('admin2/domisili');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT DOMISILI WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/cetak_domisili');
   $this->load->view('admin2/footerx');
 } else {
   redirect('admin2/domisili');
 }
}
}

//list skematian
public function skematian() {
 $data = array(
  'title' => 'PEMBUATAN SURAT KEMATIAN WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/skematian');
 $this->load->view('admin2/footer');
}

//cetak skematian
public function cetak_suratkematian() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Cetak', 'Data detail warga');
  redirect('admin2/skematian');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT KEMATIAN WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/cetak_suratkematian');
   $this->load->view('admin2/footerx');
 } else {
   redirect('admin2/skematian');
 }
}
}

//list pindah
public function pindah() {
 $data = array(
  'title' => 'PEMBUATAN SURAT PINDAH WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin2/header', $data);
 $this->load->view('admin2/pindah');
 $this->load->view('admin2/footer');
}




//list pindah
 public function listpindah() {
   $data = array(
    'title' => 'DATA WARGA TELAH PINDAH',
    'wrg'   => $this->m_warga->data_pindah()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/listpindah');
   $this->load->view('admin2/footer');
 }

//edit warga pindah
public function warga_pindah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->telahpindah($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin2/listpindah');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/warga_pindah');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/listpindah');
 }
}
}

//edit warga pindah
public function returnpindah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->masihmenetap($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin2/listpindah');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/returnpindah');
   $this->load->view('admin2/footer');
 } else {
   redirect('admin2/listpindah');
 }
}
}

//cetak spindah
public function cetak_suratpindah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Cetak', 'Data detail warga');
  redirect('admin2/pindah');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT PINDAH WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin2/header', $data);
   $this->load->view('admin2/cetak_suratpindah');
   $this->load->view('admin2/footerx');
 } else {
   redirect('admin2/pindah');
 }
}
}


  //profil saya
public function profil_saya() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_admin2->update($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Profil kamu diperbaharui ...');
  redirect('admin2/profil_saya');
} else {
  $data = array(
   'title' => 'Profil Saya',
   'ps'    => $this->db->get_where('tbl_admin2', array('nid' => $this->session->userdata('nid')))->row_array()
   );
  $this->load->view('admin2/header', $data);
  $this->load->view('admin2/profil_saya');
  $this->load->view('admin2/footer');
}
}

  //upload foto
public function upload_foto() {
 $config['upload_path']   = './assets/img/';
 $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
 $config['max_size']      = 2048;
 
 $this->load->library('upload', $config);
 $this->upload->initialize($config);
 $this->upload->do_upload('filefoto');
 $upload = $this->upload->data();
 return $upload['file_name'];
}
}