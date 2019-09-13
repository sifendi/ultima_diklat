<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("document_model");
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data["products"] = $this->document_model->getAll();
        $this->load->view("admin/product/list", $data);
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
        $this->load->view("admin/product/detail_form_tanpamodal", $data);
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

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->document_model->delete($id)) {
            redirect(site_url('admin/document'));
        }
    }

///////////////file/////////

    // function do_upload() {
    //     $input['id_table'] = $this->input->post('id_table');
    //     $input['header_document_id'] = $this->input->post('header_document_id');
    //     print_r("do_upload terpanggil");
    //     print_r($input);
    //     $config['upload_path'] = "./assets/berkas";
    //     $config['allowed_types'] = 'gif|jpg|png|txt|pdf|doc|docx';
    //     $config['encrypt_name'] = TRUE;
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;
    //     $this->load->library('upload', $config);
    //     if ($this->upload->do_upload("file_name_berkas")) {
    //         print_r("masuk if");
    //         $data = array('upload_data' => $this->upload->data());
    //         $keterangan = $this->input->post('keterangan');
    //         print_r($keterangan);
    //         $image = $data['upload_data']['file_name'];
    //         $result = $this->m_upload->simpan_upload($keterangan, $image, $input);
    //         echo json_decode($result);
    //     }
    //     print_r("masuk else");
    // }


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



    // public function aksi_upload(){
    //     $config['upload_path']          = './assets/berkas/';
    //     $config['allowed_types']        = 'gif|jpg|png|pdf|docx';
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;
 
    //     $this->load->library('upload', $config);
 
    //     if ( ! $this->upload->do_upload('file_path')){
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->load->view('v_upload', $error);
    //     }else{
    //         $data = array('upload_data' => $this->upload->data());
    //         $this->load->view('v_upload_sukses', $data);
    //     }
    // }

    
}
