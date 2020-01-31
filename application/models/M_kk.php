<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kk extends CI_Model {
	
	public $table ="tbl_kk";
	
	public function data() {
		$query = "SELECT * FROM $this->table ORDER BY no_kk ASC";
		return $this->db->query($query)->result();
	}

	public function simpan() {
		$data = array(
			'no_kk' => $this->input->post('no_kk'),
			'nama_kepala' => $this->input->post('nama_kepala'),
			'alamat' => $this->input->post('alamat')
			);
		$this->db->insert($this->table, $data);
	}
	 public function update($foto) {
    	$data = array(
    		'no_kk' => $this->input->post('no_kk'),
			'nama_kepala' => $this->input->post('nama_kepala'),
			'alamat' => $this->input->post('alamat')
    		);
  $no_kk = $this->input->post('no_kk');
  $this->db->where('no_kk', $no_kk);
  $this->db->update($this->table, $data);
}
}