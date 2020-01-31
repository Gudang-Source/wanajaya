<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

 public function __construct() {
   parent::__construct();
   sesiadmin();
   $this->load->model('m_admin');
   $this->load->model('m_petugas');
   $this->load->model('m_kk');
   $this->load->model('m_warga');
   $this->load->model('m_pendatang');
 }

 public function index() {
   redirect('admin/dashboard','refresh');
 }

    //dashboard
 public function dashboard() {
   $data = array(
    'title' => 'DASHBOARD | ADMIN SAKDES',
    'adm2'   => $this->db->query("SELECT * FROM tbl_petugas")->num_rows(),
    'kk'   => $this->db->query("SELECT * FROM tbl_kk")->num_rows(),
    'wrg'   => $this->db->query("SELECT * FROM tbl_warga WHERE kondisi=''")->num_rows(),
    'pdt'   => $this->db->query("SELECT * FROM tbl_pendatang")->num_rows()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/dashboard');
   $this->load->view('admin/footer');
 }

 

    //list admin2
 public function admin2() {
   $data = array(
    'title' => 'DATA ADMIN PENGELOLA',
    'adm2'   => $this->m_petugas->data()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/admin2_list');
   $this->load->view('admin/footer');
 }
 //tambah admin2
public function admin2_tambah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_admin2->simpan($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Data Admin pengelola baru berhasil tersimpan ...');
  redirect('admin/admin2');
} else {
  $data = array(
   'title' => 'TAMBAH DATA ADMIN PENGELOLA'
   );
  $this->load->view('admin/header', $data);
  $this->load->view('admin/admin2_tambah');
  $this->load->view('admin/footer');
}
}

//edit admin2
public function admin2_edit() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_admin2->update($uploadFoto);
  $this->session->set_flashdata('Edit', 'Admin Pengelola berhasil diperbaharui ...');
  redirect('admin/admin2');
} else {
  if ($nid = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA ADMIN PENGELOLA',
    'adm2'   => $this->db->get_where('tbl_petugas', array('nip' => $nip))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/admin2_edit');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/admin2');
 }
}
}

//hapus admin2
public function admin2_hapus() {
 if ($nid = $this->uri->segment(3)) {
  if(!empty($nid)) {
   $this->db->where('nid', $nid);
   $this->db->delete('tbl_admin2');
 }
 $this->session->set_flashdata('Hapus', 'Admin Pengelola berhasil terhapus ...');
 redirect('admin/admin2');
} else {
  redirect('admin/admin2');
}
}


//list warga
public function warga() {
 $data = array(
  'title' => 'DATA WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin/header', $data);
 $this->load->view('admin/warga_list');
 $this->load->view('admin/footer');
}

    //tambah warga
public function warga_tambah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->simpan($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Data warga baru berhasil tersimpan ...');
  redirect('admin/warga');
} else {
  $data = array(
   'title' => 'TAMBAH DATA WARGA',
   'kk' => $this->m_kk->data()   
   );
  $this->load->view('admin/header', $data);
  $this->load->view('admin/warga_tambah');
  $this->load->view('admin/footer');
}
}

//lihat warga
public function warga_lihat() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail warga');
  redirect('admin/warga');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'DETAIL DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/warga_lihat');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/warga');
 }
}
}

    //edit warga
public function warga_edit() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->update($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin/warga');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array(),
    'kk' => $this->m_kk->data()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/warga_edit');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/warga');
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
 redirect('admin/warga');
} else {
  redirect('admin/warga');
}
}

//list pendatang
public function pendatang() {
 $data = array(
  'title' => 'DATA WARGA PENDATANG',
  'pdt'   => $this->m_pendatang->data()
  );
 $this->load->view('admin/header', $data);
 $this->load->view('admin/pendatang_list');
 $this->load->view('admin/footer');
}

    //tambah pendatang
public function pendatang_tambah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_pendatang->simpan($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Data pendatang baru berhasil tersimpan ...');
  redirect('admin/pendatang');
} else {
  $data = array(
   'title' => 'TAMBAH DATA WARGA PENDATANG'
   );
  $this->load->view('admin/header', $data);
  $this->load->view('admin/pendatang_tambah');
  $this->load->view('admin/footer');
}
}

//lihat pendatang
public function surat_tinggal_sementara() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_pendatang->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail pendatang');
  redirect('admin/pendatang');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'DETAIL DATA WARGA PENDATANG',
    'pdt'   => $this->db->get_where('tbl_pendatang', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/surat_tinggal_sementara');
   $this->load->view('admin/footerx');
 } else {
   redirect('admin/pendatang');
 }
}
}

    //edit pendatang
public function pendatang_edit() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_pendatang->update($uploadFoto);
  $this->session->set_flashdata('Edit', 'pendatang berhasil diperbaharui ...');
  redirect('admin/pendatang');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA PENDATANG',
    'pdt'   => $this->db->get_where('tbl_pendatang', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/pendatang_edit');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/pendatang');
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
 redirect('admin/pendatang');
} else {
  redirect('admin/pendatang');
}
}


 //list kk
public function kk() {
 $data = array(
  'title' => 'DATA KARTU KELUARGA',
  'kk'   => $this->m_kk->data()
  );
 $this->load->view('admin/header', $data);
 $this->load->view('admin/kk_list');
 $this->load->view('admin/footer');
}
  //tambah kk
public function kk_tambah() {
 if (isset($_POST['submit'])) {
  $this->m_kk->simpan();
  $this->session->set_flashdata('Simpan', 'KK baru berhasil tersimpan ...');
  redirect('admin/kk');
} else {
  $data = array(
   'title' => 'TAMBAH DATA KARTU KELUARGA'
   );
  $this->load->view('admin/header', $data);
  $this->load->view('admin/kk_tambah');
  $this->load->view('admin/footer');
}
}

  //edit kk
public function kk_edit() {
 if (isset($_POST['submit'])) {
  $this->m_kk->update();
  $this->session->set_flashdata('Edit', 'KK berhasil diperbaharui ...');
  redirect('admin/kk');
} else {
  if ($no_kk = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA KART KELUARGA',
    'kk' => $this->db->get_where('tbl_kk', array('no_kk' => $no_kk))->row_array(),
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/kk_edit');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/kk');
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
 redirect('admin/kk');
} else {
  redirect('admin/kk');
}
}

  //pengantar KK
    public function pkk() {
     $data = array(
      'title' => 'PENGANTAR KARTU KELUARGA',
      'pkk'   => $this->m_kk->data()
      );
     $this->load->view('admin/header', $data);
     $this->load->view('admin/pkk_list');
     $this->load->view('admin/footer');
    }
    
    //cetak pengantar KK
    public function pkk_cetak() {
     if (isset($_POST['submit'])) {
      $uploadFoto = $this->upload_foto();
      $this->m_warga->lihat($uploadFoto);
      $this->session->set_flashdata('Lihat', 'Data Kartu Keluarga');
      redirect('admin/pkk');
    } else {
      if ($no_kk = $this->uri->segment(3)) {
       $data = array(
        'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
        'pkk'   => $this->db->get_where('tbl_kk', array('no_kk' => $no_kk))->row_array()
        );
       $this->load->view('admin/header', $data);
       $this->load->view('admin/pkk_cetak');
       $this->load->view('admin/footerx');
     } else {
       redirect('admin/pkk');
     }
    }
    }

    //list ektp
    public function ektp() {
     $data = array(
      'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
      'wrg'   => $this->m_warga->data()
      );
     $this->load->view('admin/header', $data);
     $this->load->view('admin/ektp_list');
     $this->load->view('admin/footer');
    }
    
//baru ektp
public function ektp_baru() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail warga');
  redirect('admin/ektp');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/ektp_baru');
   $this->load->view('admin/footerx');
 } else {
   redirect('admin/ektp');
 }
}
}

//cetak ektp
public function ektp_cetak() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Lihat', 'Data detail warga');
  redirect('admin/ektp');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT PENGANTAR WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/ektp_cetak');
   $this->load->view('admin/footerx');
 } else {
   redirect('admin/ektp');
 }
}
}


//list kelahiran
public function kelahiran() {
 $data = array(
  'title' => 'PEMBUATAN SURAT KELAHIRAN WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin/header', $data);
 $this->load->view('admin/kelahiran');
 $this->load->view('admin/footer');
}

//cetak kelahiran
public function cetak_kelahiran() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Cetak', 'Data detail warga');
  redirect('admin/kelahiran');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT KELAHIRAN WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/cetak_kelahiran');
   $this->load->view('admin/footerx');
 } else {
   redirect('admin/kelahiran');
 }
}
}

//list skematian
public function skematian() {
 $data = array(
  'title' => 'PEMBUATAN SURAT KEMATIAN WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin/header', $data);
 $this->load->view('admin/skematian');
 $this->load->view('admin/footer');
}


//list wafat
 public function listwargawafat() {
   $data = array(
    'title' => 'DATA WARGA TELAH WAFAT',
    'wrg'   => $this->m_warga->data_wafat()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/listwargawafat');
   $this->load->view('admin/footer');
 }

//edit warga wafat
public function warga_wafat() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->telahwafat($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin/listwargawafat');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/warga_wafat');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/listwargawafat');
 }
}
}

//edit warga wafat
public function returnwafat() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->masihhidup($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin/listwargawafat');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/returnwafat');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/listwargawafat');
 }
}
}

//cetak skematian
public function cetak_suratkematian() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Cetak', 'Data detail warga');
  redirect('admin/skematian');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT KEMATIAN WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/cetak_suratkematian');
   $this->load->view('admin/footerx');
 } else {
   redirect('admin/skematian');
 }
}
}


//list pindah
public function pindah() {
 $data = array(
  'title' => 'PEMBUATAN SURAT PINDAH WARGA',
  'wrg'   => $this->m_warga->data()
  );
 $this->load->view('admin/header', $data);
 $this->load->view('admin/pindah');
 $this->load->view('admin/footer');
}




//list pindah
 public function listpindah() {
   $data = array(
    'title' => 'DATA WARGA TELAH PINDAH',
    'wrg'   => $this->m_warga->data_pindah()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/listpindah');
   $this->load->view('admin/footer');
 }

//edit warga pindah
public function warga_pindah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->telahpindah($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin/listpindah');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/warga_pindah');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/listpindah');
 }
}
}

//edit warga pindah
public function returnpindah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->masihmenetap($uploadFoto);
  $this->session->set_flashdata('Edit', 'Warga berhasil diperbaharui ...');
  redirect('admin/listpindah');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'EDIT DATA WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/returnpindah');
   $this->load->view('admin/footer');
 } else {
   redirect('admin/listpindah');
 }
}
}

//cetak spindah
public function cetak_suratpindah() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_warga->lihat($uploadFoto);
  $this->session->set_flashdata('Cetak', 'Data detail warga');
  redirect('admin/pindah');
} else {
  if ($nik = $this->uri->segment(3)) {
   $data = array(
    'title' => 'PEMBUATAN SURAT PINDAH WARGA',
    'wrg'   => $this->db->get_where('tbl_warga', array('nik' => $nik))->row_array()
    );
   $this->load->view('admin/header', $data);
   $this->load->view('admin/cetak_suratpindah');
   $this->load->view('admin/footerx');
 } else {
   redirect('admin/pindah');
 }
}
}


  //profil saya
public function profil_saya() {
 if (isset($_POST['submit'])) {
  $uploadFoto = $this->upload_foto();
  $this->m_admin->update($uploadFoto);
  $this->session->set_flashdata('Simpan', 'Profil kamu diperbaharui ...');
  redirect('admin/profil_saya');
} else {
  $data = array(
   'title' => 'Profil Saya | Panel Admin SAKDES',
   'ps'    => $this->db->get_where('tbl_admin', array('username' => $this->session->userdata('username')))->row_array()
   );
  $this->load->view('admin/header', $data);
  $this->load->view('admin/profil_saya');
  $this->load->view('admin/footer');
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
