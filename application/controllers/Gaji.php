<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Gaji_model');
    }

    public function data_gaji() {
        $data['title'] = 'Daftar Gaji Karwayan';
        $data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		
		//query data
		$data['id']	= $this->db->get('karyawan')->result_array();

        if($this->form_validation->run() == false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
            $this->load->view('gaji/gaji_view', $data);
			$this->load->view('templates/footer');
		}
		else
		{
		
			redirect('gaji');
		}
    }

    public function tambah_karyawan() {
        $data['title'] = 'Daftar Aset Tetap';
		$data['user'] = $this->db->get_where('user', ['email' => 
		$this->session->userdata('email')])->row_array();
		$this->db->insert('karyawan', [
				'id' 					=> $this->input->post('id'),
				'nama       ' 			=> $this->input->post('nama'),
				'gaji'               	=> $this->input->post('gaji'),
			]);
		redirect('data');
    }

    public function insert_karyawan() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'gaji' => $this->input->post('gaji')
        );
        $this->Gaji_model->insert_karyawan($data);
        redirect('gaji');
    }

    public function edit_karyawan($id) {
        $data['karyawan'] = $this->Gaji_model->get_karyawan_by_id($id);
        $this->load->view('gaji/edit_karyawan_view', $data);
    }

    public function update_karyawan($id) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'gaji' => $this->input->post('gaji')
        );
        $this->Gaji_model->update_karyawan($id, $data);
        redirect('gaji');
    }

    public function delete_karyawan($id) {
        $this->Gaji_model->delete_karyawan($id);
        redirect('gaji');
    }
}
