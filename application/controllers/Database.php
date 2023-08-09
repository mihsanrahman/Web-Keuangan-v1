<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Database extends CI_Controller
{
	//menghalangi masuk tanpa login
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function take_backup()
        
    {
        $tables  = array(
            'barang',
            'barang_keluar',
            'barang_masuk',
            'jenis_barang',
            'merk_barang',
            'mp_aset',
            'mp_generalentry',
            'mp_head',
            'mp_hutang',
            'mp_piutang',
            'mp_sub_entry',
            'supplier',
            'transaksi',
            'user',
            'user_access_menu',
            'user_menu',
            'user_role',
            'user_sub_menu'
        );

        $this->load->dbutil();
            $db_name = $this->db->database . '_' . date('Y-m-d_H-i-s', time()) . '_backup.sql';
           $prefs = array(
            'tables' => $tables, 
            'ignore' => array(),
            'format' => 'txt',
            'filename' => $db_name ,
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n",
            'foreign_key_checks' => FALSE
        );

        $sql = $this->dbutil->backup($prefs);

        $data = $sql;

        $backup_path = './assets/db_backup/'.$prefs['filename'];

        if (write_file($backup_path, $data)) 
        {
            // Load the download helper and send the file to your desktop
            $this->load->helper('download');
            force_download($db_name,$data);

            return true;  
        } 
        else 
        {
            return false;
        }

    }
}
