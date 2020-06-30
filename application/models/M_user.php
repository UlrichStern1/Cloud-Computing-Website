<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model
{
    private $_table = "login";
    public $no;
    public $user;
    public $pass;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'no',
            'label' => 'no',
            'rules' => 'required'],

            ['field' => 'user',
            'label' => 'user',
            'rules' => 'required'],
        ];
    }

    public function ambil_data()
    {
        return $this->db->get($this->_table)->result();
        //return $this->db->get('product');
    }
    
    public function getById($no)
    {
        return $this->db->get_where($this->_table, ["no" => $no])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        //$this->no = $post["no"];
        $this->user = $post["user"];
        $this->pass = $post["pass"];
        $this->role = $post["role"];
        $this->db->insert($this->_table, $this);

    }

    function update_data(){
        $post = $this->input->post();
        $this->no = $post["no"];
        $this->user = $post["user"];
        $this->pass = $post["pass"];
        $this->role = $post["role"];
        //$this->gambar = $post["gambar"];
        $this->db->update($this->_table, $this, array('no' => $post['no']));
    }   

    function hapus_data($no){
    //$this->_deleteImage($no);
    $this->db->delete($this->_table, array("no" => $no));
    }

    function cari($no){
        $query=$this->db->get_where('product', array('no' => $no));
        return $query;
    }

    private function _uploadImage(){

    $config['upload_path']          = './upload/product/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->no;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
    }

    private function _deleteImage($no){

    $product = $this->getById($no);
    if ($product->image != "default.jpg") {
        $filename = explode(".", $product->image)[0];
        return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
        }
    }

     public function import($data)
    {
        return $this->db->insert('login', $data);
    }
}