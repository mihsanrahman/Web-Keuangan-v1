<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{
	//menghalangi masuk tanpa login
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['title'] = 'Pajak Penghasilan';
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		//query data
		
		if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('perhitungan/pajak', $data);
			$this->load->view('templates/footer');
		}
		else
		{
		
			redirect('data');
		}

		
	}
	
}