<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("document_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["products"] = $this->document_model->getAll();
        $this->load->view("admin/product/list", $data);
    }

    public function add(){
        $product = $this->document_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null){
        if (!isset($id)) redirect('admin/document');
       
        $product = $this->document_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        $this->load->view("admin/product/edit_form", $data);
    }


    public function detail($id = null){
        if (!isset($id)) redirect('admin/document');
       
        $product = $this->document_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["detail_table"] = $product->detail_all($id);
        if (!$data["detail_table"]) show_404();
        $this->load->view("admin/product/detail_form", $data);
    }



    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->document_model->delete($id)) {
            redirect(site_url('admin/document'));
        }
    }
}
