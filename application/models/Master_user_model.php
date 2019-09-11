<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user_model extends CI_Model
{
    private $_table = "users";

    public $id_user;
    public $email;
    public $user_type;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'user_type',
            'label' => 'unit',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->email = $post["email"];
        $this->user_type = $post["user_type"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_user = $post["id"];
        $this->email = $post["email"];
        $this->user_type = $post["user_type"];
        $this->db->update($this->_table, $this, array('id_user' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}
