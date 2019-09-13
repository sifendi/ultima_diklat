<?php
class Upload extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_upload');
		
	}

	function index(){
		$this->load->view('admin/product/uploadtest');	
	}


	function do_upload(){
        $config['upload_path']="./berkas/";
        $config['allowed_types']='gif|jpg|png|pdf';
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload',$config);
	    if($this->upload->do_upload("file")){
	        $data = array('upload_data' => $this->upload->data());

	        $judul= $this->input->post('judul');
	        $image= $data['upload_data']['file_name']; 
	        
	        $result= $this->m_upload->simpan_upload($judul,$image);
	        echo json_decode($result);
        }

     }
	
}