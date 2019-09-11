<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Document_model extends CI_Model
{
    private $_table = "header_document";
    private $_table2 = "table1";

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
    
    public function getById($id){
        return $this->db->get_where($this->_table, ["header_document_id" => $id])->row();
    }

    public function detail_all($id){
        return $this->db->get($this->_table2)->result();
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
}
