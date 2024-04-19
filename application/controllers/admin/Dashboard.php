<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $data['title'] = "Dashboard";
        $karyawan = $this->db->query("SELECT * FROM data_karyawan");
        $admin = $this->db->query("SELECT * FROM data_karyawan WHERE jabatan = 'Admin'");
        $jabatan = $this->db->query("SELECT * FROM data_jabatan");
        $kehadiran = $this->db->query("SELECT * FROM data_kehadiran");
        $data['karyawan']=$karyawan->num_rows();
        $data['admin']=$admin->num_rows();
        $data['jabatan']=$jabatan->num_rows();
        $data['kehadiran']=$kehadiran->num_rows();
        $this->load->View('templates_admin/header', $data);
        $this->load->View('templates_admin/sidebar');
        $this->load->View('admin/dashboard', $data);
        $this->load->View('templates_admin/footer');
    }
}

?>