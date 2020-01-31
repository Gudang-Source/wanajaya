<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {

  public $table ="tbl_petugas";
  
  public function chekLogin($nip, $password) {
    $this->db->where('nip', $nip);
    $this->db->where('password', SHA1($password));
    $admin2 = $this->db->get($this->table)->row_array();
    return $admin2;
}

public function data() {
    $query = "SELECT * FROM $this->table ORDER BY nip ASC";
    return $this->db->query($query)->result();
}

public function simpan($foto) {
    $data = array(
        'nip'       => $this->input->post('nip'),
        'password'  => SHA1($this->input->post('password')),
        'nama_petugas'=> $this->input->post('nama_petugas'),
        'foto'      => $foto
        );
    $this->db->insert($this->table, $data);
}

public function update($foto) {
    if(empty($foto) AND $this->input->post('password') == '') {
        $data = array(
            'nama_petugas' => $this->input->post('nama_petugas'),
            );
    } else if(empty($foto) AND $this->input->post('password') != '') {
        $data = array(
            'password'   => SHA1($this->input->post('password')),
            'nama_petugas' => $this->input->post('nama_petugas'),
            );
    } else if($this->input->post('password') == '') {
        $data = array(
            'nama_petugas' => $this->input->post('nama_petugas'),
            'foto'       => $foto
            );
    } else if($this->input->post('password') != '') {
        $data = array(
            'password'   => SHA1($this->input->post('password')),
            'nama_petugas' => $this->input->post('nama_petugas'),
            'foto'       => $foto
            );
    }
    $nip = $this->input->post('nip');
    $this->db->where('nip', $nip);
    $this->db->update($this->table, $data);
}
}