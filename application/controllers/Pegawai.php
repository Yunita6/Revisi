<?php
class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
        // Load the Pegawai model
        $this->load->model('Pegawai_model');
    }

    // Display all employees
    public function index()
    {
        $data['pegawai'] = $this->Pegawai_model->get_all_pegawai();
        $this->load->view('pegawai/index', $data);
    }

    // Add new employee
    public function add()
    {
        if ($this->input->post()) {
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'posisi' => $this->input->post('posisi'),
                'gaji' => $this->input->post('gaji')
            ];
            $this->Pegawai_model->insert_pegawai($data);
            redirect('pegawai');
        }

        $this->load->view('pegawai/add');
    }

    // Edit employee
    public function edit($id)
    {
        $data['pegawai'] = $this->Pegawai_model->get_pegawai_by_id($id);

        if ($this->input->post()) {
            $data_update = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'posisi' => $this->input->post('posisi'),
                'gaji' => $this->input->post('gaji')
            ];
            $this->Pegawai_model->update_pegawai($id, $data_update);
            redirect('pegawai');
        }

        $this->load->view('pegawai/edit', $data);
    }

    // Delete employee
    public function delete($id)
    {
        $this->Pegawai_model->delete_pegawai($id);
        redirect('pegawai');
    }
}
?>
