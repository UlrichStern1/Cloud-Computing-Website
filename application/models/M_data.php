<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model
{
    private $_table = "konten";
    public $no;
    public $judul;
    public $konten;
    public $gambar='default.jpg';

    public function rules()
    {
        return [
            ['field' => 'no',
            'label' => 'no',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],
        ];
    }

    public function ambil_data()
    {
        return $this->db->get($this->_table)->result();
        //return $this->db->get('konten');
    }

    public function sorting_data()
    {
        $this->db->order_by('tanggal', 'asc' );
        $query = $this->db->get('konten');
        return $query->result();

        //return $this->db->get('konten');
    }
    
    public function getById($no)
    {
        return $this->db->get_where($this->_table, ["no" => $no])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->seri = $post["seri"];
        $this->judul = $post["judul"];
        $this->konten = $post["konten"];
        $this->tipe = $post["tipe"];
        $this->tanggal = $post["tanggal"];
        $this->gambar = $this->_uploadImage();
        $this->db->insert($this->_table, $this);

    }

    function update_data(){
        $post = $this->input->post();
        $this->no = $post["no"];
        $this->seri = $post["seri"];
        $this->judul = $post["judul"];
        $this->konten = $post["konten"];
        $this->tipe = $post["tipe"];
        $this->tanggal = $post["tanggal"];
        
    //     if (!empty($_FILES["gambar"]["judul"])) 
    //     {        
        $this->gambar = $this->_uploadImage();
    //     } else {
    //         $this->gambar = $post["old_image"];
    //     }

         $this->db->update($this->_table, $this, array('no' => $post['no']));
    }   

    function hapus_data($no){
    $this->_deleteImage($no);
    $this->db->delete($this->_table, array("no" => $no));
    }

    function cari($no){
        $query=$this->db->get_where('konten', array('no' => $no));
        return $query;
    }

    private function _uploadImage(){

    $config['upload_path']          = './upload/content/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->seri;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    }
    

    return "default.jpg";
    }

    private function _deleteImage($seri){

    $konten = $this->getById($seri);
    if ($konten->gambar != "default.jpg") {
        $filename = explode(".", $konten->gambar)[0];
        return array_map('unlink', glob(FCPATH."upload/content/$filename.*"));
        }
    }

     public function import($data)
    {
        return $this->db->insert('konten', $data);
    }

    public function read($slug_konten)
    {
        $this->db->select('konten');
        $query = $this->db->get();
        return $query->result();
    }
   
}