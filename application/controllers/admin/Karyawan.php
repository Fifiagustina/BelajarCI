<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Karyawan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["karyawan"] = $this->Karyawan_model->getAll();
        $this->load->view("admin/Karyawan/list", $data);
    }

    public function add()
    {
        $karyawan = $this->Karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());

        if ($validation->run()) {
            $karyawan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/karyawan/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/Karyawan');

        $karyawan = $this->Karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawan->rules());

        if ($validation->run()) {
            $karyawan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["karyawan"] = $product->getById($id);
        if (!$data["karyawan"]) show_404();

        $this->load->view("admin/Karyawan/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->Karyawan_model->delete($id)) {
            redirect(site_url('admin/Karyawan'));
        }
    }
}
