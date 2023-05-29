<?php 

class Transkip_model extends CI_Model{
	
	public $table = 'transkip_nilai';
	public $id = 'id_transkip';

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function update($id, $data)
	{
		$this->db->where($this->id,$id);
		$this->db->update($this->table, $data);
	}
}