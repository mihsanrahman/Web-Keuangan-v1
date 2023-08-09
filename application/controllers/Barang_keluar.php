<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Barang_keluar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_keluar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Barang Keluar';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array(); 
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'barang_keluar/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'barang_keluar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'barang_keluar/index.html';
            $config['first_url'] = base_url() . 'barang_keluar/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Barang_keluar_model->total_rows($q);
        $barang_keluar = $this->Barang_keluar_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user' => $data['user'] ,
            'title' => $data['title'],
            'barang_keluar_data' => $barang_keluar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'barang_keluar/barang_keluar_list',
            'judul' => 'Data Barang Keluar',
        );
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang_keluar/barang_keluar_list', $data);
            $this->load->view('templates/footer');
    }

    public function read($id) 
    {
        $data['title'] = 'Detail Barang Keluar';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $row = $this->Barang_keluar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_barang_keluar' => $row->id_barang_keluar,
		'kode_barang' => $row->kode_barang,
		'tgl_keluar' => $row->tgl_keluar,
		'jumlah' => $row->jumlah,
	    );
            $this->load->view('barang_keluar/barang_keluar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_keluar'));
        }
    }

    public function create() 
    {
        $data['title'] = 'Tambah Barang Keluar';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data = array(
            'user' => $data['user'] ,
            'title' => $data['title'],
            'button' => 'Create',
            'action' => site_url('barang_keluar/create_action'),
	    'id_barang_keluar' => set_value('id_barang_keluar'),
	    'kode_barang' => set_value('kode_barang'),
	    'tgl_keluar' => set_value('tgl_keluar'),
	    'jumlah' => set_value('jumlah'),
        'konten' => 'barang_keluar/barang_keluar_form',
            'judul' => 'Data Barang Keluar',
	);
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang_keluar/barang_keluar_form', $data);
            $this->load->view('templates/footer');
    }
    
    public function create_action() 
    {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
	    );

            $this->Barang_keluar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('barang_keluar'));
        }
    }
    
    public function update($id) 
    {
        $data['title'] = 'Update Barang Keluar';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $row = $this->Barang_keluar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'user' => $data['user'] ,
            'title' => $data['title'],
                'button' => 'Update',
                'action' => site_url('barang_keluar/update_action'),
		'id_barang_keluar' => set_value('id_barang_keluar', $row->id_barang_keluar),
		'kode_barang' => set_value('kode_barang', $row->kode_barang),
		'tgl_keluar' => set_value('tgl_keluar', $row->tgl_keluar),
		'jumlah' => set_value('jumlah', $row->jumlah),
        'konten' => 'barang_keluar/barang_keluar_form',
            'judul' => 'Data Barang Keluar',
	    );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('barang_keluar/barang_keluar_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_keluar'));
        }
    }
    
    public function update_action() 
    {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang_keluar', TRUE));
        } else {
            $data = array(
		'kode_barang' => $this->input->post('kode_barang',TRUE),
		'tgl_keluar' => $this->input->post('tgl_keluar',TRUE),
		'jumlah' => $this->input->post('jumlah',TRUE),
	    );

            $this->Barang_keluar_model->update($this->input->post('id_barang_keluar', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('barang_keluar'));
        }
    }
    
    public function delete($id) 
    {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $row = $this->Barang_keluar_model->get_by_id($id);

        if ($row) {
            $this->Barang_keluar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('barang_keluar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('barang_keluar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_barang', 'kode barang', 'trim|required');
	$this->form_validation->set_rules('tgl_keluar', 'tgl keluar', 'trim|required');
	$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');

	$this->form_validation->set_rules('id_barang_keluar', 'id_barang_keluar', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

