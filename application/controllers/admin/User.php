<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Master_user_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["users"] = $this->Master_user_model->getAll();
        $this->load->view("admin/user/list", $data);
    }

    public function add(){
        $product = $this->Master_user_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/user/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/user');
       
        $product = $this->Master_user_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/user/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Master_user_model->delete($id)) {
            redirect(site_url('admin/user'));
        }
    }
}
