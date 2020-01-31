<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_warga extends CI_Model {

  public $table ="tbl_warga";

  public function data() {
    $query = "SELECT * FROM $this->table WHERE kondisi='' ORDER BY nik ASC ";
    return $this->db->query($query)->result();
  }
  
  public function simpan($foto) {
    $data = array(
      'nik' => $this->input->post('nik'),
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'jenkel' => $this->input->post('jenkel'),
      'ttl' => $this->input->post('ttl'),
      'tgl' => $this->input->post('tgl'),
      'agama' => $this->input->post('agama'),
      'status' => $this->input->post('status'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'pendidikan' => $this->input->post('pendidikan'),
      'kewarganegaraan' => $this->input->post('kewarganegaraan'),
      'no_kk' => $this->input->post('no_kk'),
      'foto' => $foto
      );
    $this->db->insert($this->table, $data);
  }
  public function update($foto) {
    $data = array(
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'jenkel' => $this->input->post('jenkel'),
      'ttl' => $this->input->post('ttl'),
      'tgl' => $this->input->post('tgl'),
      'agama' => $this->input->post('agama'),
      'status' => $this->input->post('status'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'pendidikan' => $this->input->post('pendidikan'),
      'kewarganegaraan' => $this->input->post('kewarganegaraan'),
      'no_kk' => $this->input->post('no_kk'),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->update($this->table, $data);
}

public function lihat($foto) {
    $data = array(
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'jenkel' => $this->input->post('jenkel'),
      'ttl' => $this->input->post('ttl'),
      'tgl' => $this->input->post('tgl'),
      'agama' => $this->input->post('agama'),
      'status' => $this->input->post('status'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'pendidikan' => $this->input->post('pendidikan'),
      'kewarganegaraan' => $this->input->post('kewarganegaraan'),
      'no_kk' => $this->input->post('no_kk'),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->lihat($this->table, $data);
}

 public function data_wafat() {
    $query = "SELECT * FROM $this->table WHERE kondisi='WAFAT' ORDER BY nik ASC ";
    return $this->db->query($query)->result();
  }

public function telahwafat($foto) {
    $data = array(
      'nama' => $this->input->post('nama'),
      'jenkel' => $this->input->post('jenkel'),
      'kondisi' => $this->input->post('kondisi'),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->update($this->table, $data);
}

public function masihhidup($foto) {
    $data = array(
      'nama' => $this->input->post('nama'),
      'jenkel' => $this->input->post('jenkel'),
      'kondisi' => $this->input->post(''),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->update($this->table, $data);
}

 public function data_pindah() {
    $query = "SELECT * FROM $this->table WHERE kondisi='PINDA' ORDER BY nik ASC ";
    return $this->db->query($query)->result();
  }


public function telahpindah($foto) {
    $data = array(
      'nama' => $this->input->post('nama'),
      'jenkel' => $this->input->post('jenkel'),
      'kondisi' => $this->input->post('kondisi'),
      'pindahrt' => $this->input->post('pindahrt'),
      'pindahdesa' => $this->input->post('pindahdesa'),
      'pindahkec' => $this->input->post('pindahkec'),
      'pindahkab' => $this->input->post('pindahkab'),
      'pindahprov' => $this->input->post('pindahprov'),
      'foto' => $foto,
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->update($this->table, $data);
}

public function masihmenetap($foto) {
    $data = array(
      'nama' => $this->input->post('nama'),
      'jenkel' => $this->input->post('jenkel'),
      'kondisi' => $this->input->post(''),
      'pindahrt' => $this->input->post(''),
      'pindahdesa' => $this->input->post(''),
      'pindahkec' => $this->input->post(''),
      'pindahkab' => $this->input->post(''),
      'pindahprov' => $this->input->post(''),
      'foto' => $foto
      );
  $nik = $this->input->post('nik');
  $this->db->where('nik', $nik);
  $this->db->update($this->table, $data);
}
}