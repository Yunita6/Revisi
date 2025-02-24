<?php
class Pegawai_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    // Get all employees
    public function get_all_pegawai()
    {
        return $this->db->get('pegawai')->result_array();
    }

    // Get employee by ID
    public function get_pegawai_by_id($id)
    {
        return $this->db->get_where('pegawai', ['id' => $id])->row_array();
    }

    // Insert new employee
    public function insert_pegawai($data)
    {
        $this->db->insert('pegawai', $data);
    }

    // Update employee
    public function update_pegawai($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('pegawai', $data);
    }

    // Delete employee
    public function delete_pegawai($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pegawai');
    }
}
?>
