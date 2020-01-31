<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendatang extends CI_Model {

  public $table ="tbl_pendatang";

  public function data() {
    $query = "SELECT * FROM $this->table ORDER BY nik ASC";
    return $this->db->query($query)->result();
  }
  
  public function simpan($foto) {
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'domisili' => $this->input->post('domisili'),
      'nohp' => $this->input->post('nohp'),
      'keperluan' => $this->input->post('keperluan'),
      'foto' => $foto
      );
    $this->db->insert($this->table, $data);
  }
  public function update($foto) {
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'domisili' => $this->input->post('domisili'),
      'nohp' => $this->input->post('nohp'),
      'keperluan' => $this->input->post('keperluan'),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->update($this->table, $data);
}

public function lihat($foto) {
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'domisili' => $this->input->post('domisili'),
      'nohp' => $this->input->post('nohp'),
      'keperluan' => $this->input->post('keperluan'),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->lihat($this->table, $data);
}
}