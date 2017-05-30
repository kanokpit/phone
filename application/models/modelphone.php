<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelphone extends CI_Model {

	public function connectdb()
	{
		$db=$this->db
		->join('brand','brand.id_brand = telphone.id_brand','left')
		->get('telphone')
		->result_array();
		return $db;
	}
	public function read_brand()
	{
		$db=$this->db
		->get('brand')
		->result_array();
		return $db;
	}
	public function insert($add)
	{
		$this->db->insert('telphone',$add);
	}
	public function read_one($add)
	{
		$query=$this->db
		->where('id_phone',$add)
		->get('telphone')
		->result_array();
		return $query;
		//print_r($query);
	}
	public function edit($add)
	{
		$this->db
		->where('id_phone',$add['id_phone'])
		->update('telphone',$add);
	}
	public function deletedata($delete)
	{
		$this->db
		->where('id_phone',$delete)
		->delete('telphone');
	}

}
