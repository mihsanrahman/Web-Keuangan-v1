<?php
class Gaji_model extends CI_Model {

    public function get_all_karyawan() {
        return $this->db->get('karyawan')->result();
    }

    public function get_karyawan_by_id($id) {
        return $this->db->get_where('karyawan', ['id' => $id])->row();
    }

    public function insert_karyawan($data) {
        $this->db->insert('karyawan', $data);
    }

    public function update_karyawan($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('karyawan', $data);
    }

    public function delete_karyawan($id) {
        $this->db->where('id', $id);
        $this->db->delete('karyawan');
    }
}
