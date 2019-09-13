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

    public function index(){

        $this->load->library('session');
        $user_type = $this->session->userdata('user')['user_type'];
        $data["products"] = $this->document_model->getAllunit($user_type);
        $this->load->view("unit/product/list", $data);
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
        $data = array(
                        'document_id' => $id,
                        'keterangan' => 'My Id'
                    );

        // print_r($data['header_document_id']);exit;
        $data["detail_table1"] = $product->detail_kelompok1();
        $data["detail_table2"] = $product->detail_kelompok2();
        // print_r($data["detail_table"]);exit;

        if (!$data["detail_table1"]) show_404();
        $this->load->view("unit/product/detail_form", $data);
    }


    public function add(){
        $product = $this->document_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());
        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("unit/product/new_form");
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
        $this->load->view("unit/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->document_model->delete($id)) {
            redirect(site_url('unit/document'));
        }
    }

///////////////file/////////

    function do_upload() {
        $input['id_table'] = $this->input->post('id_table');
        $input['header_document_id'] = $this->input->post('header_document_id');
        $config['upload_path'] = "./assets/berkas";
        $config['allowed_types'] = 'gif|jpg|png|txt|pdf|doc|docx';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("file_path")) {
            $data = array('upload_data' => $this->upload->data());
            $keterangan = $this->input->post('keterangan');
            $image = $data['upload_data']['file_name'];
            $result = $this->m_upload->simpan_upload($keterangan, $image, $input);
            echo json_decode($result);
        }
    }

    
}
