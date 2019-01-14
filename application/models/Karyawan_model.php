<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $karyawan_id;
    public $karyawan_name;
    public $karyawan_address;
    public $karyawan_telp;

    public function rules()
    {
        return [

            ['field' => 'karyawan_id',
            'label' => 'Id',
            'rules' => 'numeric'],

            ['field' => 'karyawan_name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'karyawan_address',
            'label' => 'Address',
            'rules' => 'required'],

            ['field' => 'karyawan_telp',
            'label' => 'Telpon',
            'rules' => 'numeric']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["karyawan_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->karyawan_id = uniqid();
        $this->karyawan_name = $post["name"];
        $this->$karyawan_address = $post["address"];
        $this->$karyawan_telp = $post["telp"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->karyawan_id = uniqid();
        $this->karyawan_name = $post["name"];
        $this->$karyawan_address = $post["address"];
        $this->$karyawan_telp = $post["telp"];
        $this->db->update($this->_table, $this, array('karyawan_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("karyawan_id" => $id));
    }
}
