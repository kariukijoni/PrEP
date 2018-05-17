<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Drug_model extends CI_Model {

	public function read()
	{
		$query = $this->db->get('tbl_drug');
		return $query->result_array();
	}

	public function read_list()
	{
		$query = $this->db->get('vw_drug_list');
		return $query->result_array();
	}

	public function insert($data)
	{	
		$this->db->insert('tbl_drug',	$data);
		$count = $this->db->affected_rows();
		if($count > 0)
		{
			$data['id'] = $this->db->insert_id();
			$data['status'] = TRUE;
		}
		else
		{
			$data['status'] = FALSE;
		}
		return $data;
	}

	public function update($id, $data)
	{	
		$this->db->update('tbl_drug', $data, array('id' => $id));
		$count = $this->db->affected_rows();
		if($count > 0)
		{
			$data['status'] = TRUE;
		}
		else
		{
			$data['status'] = FALSE;
		}
		return $data;
	}

	public function delete($id)
	{	
		$this->db->delete('tbl_drug', array('id' => $id)); 
		$count = $this->db->affected_rows();
		if($count > 0)
		{
			$data['status'] = TRUE;
		}
		else
		{
			$data['status'] = FALSE;
		}
		return $data;
	}

}