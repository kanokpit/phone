<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class template extends CI_Controller {

public function loadpage($value){
	$this->load->view('templates/font/header');
	$this->load->view('templates/font/sidebar');
	$this->load->view($value['view'],$value['result']);
	$this->load->view('templates/font/footer');

}

	public function index()
	{
		$query=$this->modelphone->connectdb();
		$value = array(
			'result' => array(
				'data' => $query
			),
			'view'=>'phone'
		);
	$this->loadpage($value);
	}
	public function test1()
	{
		$data=$this->modelphone->connectdb();
		$value=array(
			'data'=>$data
		);
		$this->load->view('phone',$value);
	}
	public function testdb()
	{
		$value=$this->modelphone->connectdb();
		//print_r($value);
	}
	public function addform()
	{
		$pr=$this->modelphone->read_brand();
		$value = array(
			'result' => array(
				'brand'=>$pr
			),
				'view'=>'addform',
				'brand'=>$pr
			);

		$this->loadpage($value);
	}
	public function insert()
	{
		$add=$this->input->post();
		$this->modelphone->insert($add);
		redirect('hello');
	}
	public function editform()
	{
		$id=$this->uri->segment(3);
		$query=$this->modelphone->read_one($id);
		$pr=$this->modelphone->read_province();
		$value=array(
			'result' => array(
			'data' => $query,
			'brand'=>$pr
		),
		'view'=>'editform'
		);
		//redirect('Welcome/test1');
		//print_r($value);
		$this->loadpage($value);
	}
	public function update()
	{
		$editdata=$this->input->post();
		$this->modelphone->edit($editdata);
		redirect('hello');
	}
	public function deletedata()
	{
		$delete=$this->uri->segment(3);
		$this->modelphone->deletedata($delete);
		redirect('hello');
	}
}
