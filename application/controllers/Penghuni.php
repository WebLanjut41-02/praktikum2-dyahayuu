<?php 
 
 
class Penghuni extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_pos');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['tb_penghuni'] = $this->m_pos->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$unit = $this->input->post('unit');
		$ktp = $this->input->post('ktp');
 
		$data = array(
			'nama' => $nama,
			'unit' => $unit,
			'ktp' => $ktp
			);
		$this->m_pos->input_data($data,'tb_penghuni');
		redirect('Penghuni/index');
	}

	function edit($id){
	$where = array('id' => $id);
	$data['tb_penghuni'] = $this->m_pos->edit_data($where,'tb_penghuni')->result();
	$this->load->view('v_edit',$data);
}

	function update(){
	$nama = $this->input->post('nama');
	$unit = $this->input->post('unit');
	$ktp = $this->input->post('ktp');
 
	$data = array(
		'id'=>$id,
		'nama' => $nama,
		'unit' => $unit,
		'ktp' => $ktp
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_pos->update_data($where,$data,'tb_penghuni');
	redirect('Penghuni/index');
}
 
}