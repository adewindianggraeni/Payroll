<?php 

class DataJabatan extends CI_Controller{

    public function index()
    {
        $data['title'] = "Data Jabatan";
        $this->load->View('templates_admin/header', $data);
        $this->load->View('templates_admin/sidebar');
        $this->load->View('admin/dataJabatan', $data);
        $this->load->View('templates_admin/footer');
    }
}
?>