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
        if (!isset($id)) redirect('unit/document');
       
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
        $data["detail_table3"] = $product->detail_kelompok3();
        $data["detail_table4"] = $product->detail_kelompok4();
        $data["detail_table5"] = $product->detail_kelompok5();
        $data["detail_table6"] = $product->detail_kelompok6();
        $data["detail_table7"] = $product->detail_kelompok7();
        $data["detail_table8"] = $product->detail_kelompok8();
        // print_r($data["detail_table"]);exit;

        if (!$data["detail_table1"]) show_404();
        $this->load->view("unit/product/detail_list", $data);
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

       function do_upload_fix(){
        // print_r("controller");exit;
        $config['upload_path']="./berkas";
        $config['allowed_types']='gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        $config['max_size']             = 5000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file_name_berkas")){
            $data = array('upload_data' => $this->upload->data());
            $id_table = $this->input->post('id_table');
            $header_document_id = $this->input->post('header_document_id');
            $keterangan= $this->input->post('keterangan');
            $image= $data['upload_data']['file_name']; 
            $result= $this->document_model->simpan_upload($keterangan,$id_table,$header_document_id,$image);
            echo json_decode($result);
        }

     }


    public function hapus_file(){
        $id_table = $this->input->post('id_table');
        $header_document_id = $this->input->post('header_document_id');
        
        if ($this->document_model->delete_file($id_table, $header_document_id)) {
            redirect(site_url('unit/document'));
        }
    }

    
}
