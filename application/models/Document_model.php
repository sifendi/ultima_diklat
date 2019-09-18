<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Document_model extends CI_Model
{
    private $_table = "header_document";
    private $_table2 = "table1";
    private $_table3 = "files";

    public $header_document_id;
    public $name;
    public $type_unit;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'type_unit',
            'label' => 'unit',
            'rules' => 'numeric']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
    

    public function getAllunit($user_type){
        return $this->db->get_where($this->_table, ["type_unit" => $user_type])->result();
    }    
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["header_document_id" => $id])->row();
    }

    // public function detail_all(){
    //     return $this->db->get($this->_table2)->row();
    // }

    public function detail_kelompok1(){
        return $this->db->get_where($this->_table2, ["kelompok" => 1])->result();
    }
    public function detail_kelompok2(){
        return $this->db->get_where($this->_table2, ["kelompok" => 2])->result();
    }
    public function detail_kelompok3(){
        return $this->db->get_where($this->_table2, ["kelompok" => 3])->result();
    }
    public function detail_kelompok4(){
        return $this->db->get_where($this->_table2, ["kelompok" => 4])->result();
    }
    public function detail_kelompok5(){
        return $this->db->get_where($this->_table2, ["kelompok" => 5])->result();
    }
    public function detail_kelompok6(){
        return $this->db->get_where($this->_table2, ["kelompok" => 6])->result();
    }
    public function detail_kelompok7(){
        return $this->db->get_where($this->_table2, ["kelompok" => 7])->result();
    }
    public function detail_kelompok8(){
        return $this->db->get_where($this->_table2, ["kelompok" => 8])->result();
    }




    public function save(){
        $post = $this->input->post();
        $this->header_document_id = uniqid();
        $this->name = $post["name"];
        $this->type_unit = $post["type_unit"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->header_document_id = $post["id"];
        $this->name = $post["name"];
        $this->type_unit = $post["type_unit"];
        $this->db->update($this->_table, $this, array('header_document_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("header_document_id" => $id));
    }

    public function delete_file($id, $header)
    {
        return $this->db->delete($this->_table3, array("header_document_id" => $header,"table_id" => $id));
    }











//////////////upload

    function simpan_upload($keterangan, $id_table, $header_id,$image){
        $data = array(
                'keterangan' => $keterangan,
                'table_id' => $id_table,
                'header_document_id' => $header_id,
                'file_path' => $image
            );  
        $result= $this->db->insert('files',$data);
        return $result;
    }


  // function simpan_upload($keterangan, $image, $input) {
  //       $data = array(
  //           'keterangan' => $keterangan,
  //           'gambar' => $image,
  //           'table_id' => $input['id_table'],
  //           'header_document_id' => $input['header_document_id']
  //       );
  //       $result = $this->db->insert('files', $data);
  //       return $result;
  //   }





}
