<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Supplier Barang';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'supplier/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'supplier/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'supplier/index.html';
            $config['first_url'] = base_url() . 'supplier/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Supplier_model->total_rows($q);
        $supplier = $this->Supplier_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'user' => $data['user'] ,
            'title' => $data['title'],
            'supplier_data' => $supplier,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'konten' => 'supplier/supplier_list',
            'judul' => 'Data Supplier',
        );
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('supplier/supplier_list', $data);
            $this->load->view('templates/footer');
    }

    public function read($id) 
    {
        $data['title'] = 'Detail Supplier Barang';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $row = $this->Supplier_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_supplier' => $row->id_supplier,
		'kode_supplier' => $row->kode_supplier,
		'nama_supplier' => $row->nama_supplier,
	    );
            $this->load->view('supplier/supplier_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supplier'));
        }
    }

    public function create() 
    {
        $data['title'] = 'Tambah Supplier Barang';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $data = array(
            'user' => $data['user'] ,
            'title' => $data['title'],
            'button' => 'Create',
            'action' => site_url('supplier/create_action'),
	    'id_supplier' => set_value('id_supplier'),
	    'kode_supplier' => set_value('kode_supplier'),
        'nama_supplier' => set_value('nama_supplier'),
        'username' => set_value('username'),
	    'password' => set_value('password'),
        'konten' => 'supplier/supplier_form',
            'judul' => 'Data Supplier',
	);
        $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('supplier/supplier_form', $data);
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
		'kode_supplier' => $this->input->post('kode_supplier',TRUE),
        'nama_supplier' => $this->input->post('nama_supplier',TRUE),
        'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
	    );

            $this->Supplier_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('supplier'));
        }
    }
    
    public function update($id) 
    {
        $data['title'] = 'Update Supplier Barang';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $row = $this->Supplier_model->get_by_id($id);

        if ($row) {
            $data = array(
                'user' => $data['user'] ,
            'title' => $data['title'],
                'button' => 'Update',
                'action' => site_url('supplier/update_action'),
		'id_supplier' => set_value('id_supplier', $row->id_supplier),
		'kode_supplier' => set_value('kode_supplier', $row->kode_supplier),
        'nama_supplier' => set_value('nama_supplier', $row->nama_supplier),
        'username' => set_value('username', $row->username),
		'password' => set_value('password', $row->password),
        'konten' => 'supplier/supplier_form',
            'judul' => 'Data Supplier',
	    );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('supplier/supplier_form', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supplier'));
        }
    }
    
    public function update_action() 
    {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_supplier', TRUE));
        } else {
            $data = array(
		'kode_supplier' => $this->input->post('kode_supplier',TRUE),
        'nama_supplier' => $this->input->post('nama_supplier',TRUE),
        'username' => $this->input->post('username',TRUE),
		'password' => $this->input->post('password',TRUE),
	    );

            $this->Supplier_model->update($this->input->post('id_supplier', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('supplier'));
        }
    }
    
    public function delete($id) 
    {
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        $row = $this->Supplier_model->get_by_id($id);

        if ($row) {
            $this->Supplier_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('supplier'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supplier'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_supplier', 'kode supplier', 'trim|required');
    $this->form_validation->set_rules('nama_supplier', 'nama supplier', 'trim|required');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');

	$this->form_validation->set_rules('id_supplier', 'id_supplier', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function pemesanan() 
    {
        $data['title'] = 'Pemesanan Supplier Barang';
        $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
        if ($row) {
            $data = array(
        'kode_transaksi' => $row->kode_transaksi,
        'tgl_transaksi' => $row->tgl_transaksi,
        );
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('supplier/pesanan_supplier', $data);
            $this->load->view('templates/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supplier'));
        }
    }

}
