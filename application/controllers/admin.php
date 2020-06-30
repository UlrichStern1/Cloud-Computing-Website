<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('pelanggan');
		// $this->load->model('m_order');
		$this->load->model('m_data');
		$this->load->model('m_user');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
	/**
	 * Menampilkan data yang sudah diimport.
	 *
	 */
	public function index()
	{
		$data['konten'] = $this->m_data->sorting_data();
		$this->load->view('admin/header');
		$this->load->view('admin/v_index', $data);
		$this->load->view('admin/footer');
	}

	public function berita($no = null)
	{
		if (!isset($no)) redirect('admin/berita');

        $konten = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($konten->rules());


        if ($validation->run()) {
            $konten->update_data();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["konten"] = $konten->getById($no);
        if (!$data["konten"]) show_404();

        $this->load->view('admin/header2');
        $this->load->view('admin/v_berita',$data);
        $this->load->view('admin/footer');
	}

	public function user()
	{
		$user['user'] = $this->m_user->ambil_data();
		$this->load->view('admin/header3');
		$this->load->view('admin/v_user', $user);
		$this->load->view('admin/footer');
	}

	public function content()
	{
		$data['konten'] = $this->m_data->sorting_data();
		$this->load->view('admin/header2');
		$this->load->view('admin/v_content', $data);
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$this->load->view('admin/header2');
		$this->load->view('admin/v_input');
		$this->load->view('admin/footer');
	}

	public function adduser()
	{
		$this->load->view('admin/header3');
		$this->load->view('admin/v_useradd');
		$this->load->view('admin/footer');
	}

	public function addprocess()
	{
		$konten = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($konten->rules());
        
        $konten->save();
        
        if ($validation->run()) {
            $konten->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('admin/add');
	}

	public function adduserprocess()
	{
		$user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        
        $user->save();
        
        if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('admin/user');
	}

	public function edit($no = null)
	{
		if (!isset($no)) redirect('admin/content');

        $konten = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($konten->rules());


        if ($validation->run()) {
            $konten->update_data();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["konten"] = $konten->getById($no);
        if (!$data["konten"]) show_404();

        $this->load->view('admin/header2');
        $this->load->view('admin/v_edit',$data);
        $this->load->view('admin/footer');
	}

	public function edituser($no = null)
	{
		if (!isset($no)) redirect('admin/content');

        $user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());


        if ($validation->run()) {
            $user->update_data();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($no);
        if (!$data["user"]) show_404();

        $this->load->view('admin/header3');
        $this->load->view('admin/v_useredit',$data);
        $this->load->view('admin/footer');
	}

	public function editprocess()
	{
		$konten = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($konten->rules());

        $konten->update_data();

        redirect('admin/content');
	}

	public function edituserprocess()
	{
		$user = $this->m_user;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        $user->update_data();

        redirect('admin/user');
	}

	public function login()
	{
		$this->load->view('');
	}

	function hapus($no = null){
        if (!isset($no)) show_404();
        
        $this->m_data->hapus_data($no);
        redirect('admin/content');
        
    }

    function hapususer($no = null){
        if (!isset($no)) show_404();
        
        $this->m_user->hapus_data($no);
        redirect('admin/user');
        
    }

    public function read($slug_konten)
    {
    	$konten = $this->m_data;
    	// $site = $this->konfigurasi_model->listing();
    	//$berita = $this->m_data->read();
    	$read = $this->m_data->read($slug_konten);


    	$data 	= array(
    		'title' => $read->judul,
    		//'keywords' => $read->judul,
    		'read' => $konten,
    		//'read' => $read,
    		//'isi' => 'artikellist/read'

    	);
    	$this->load->view('admin/index', $data);
    }
}
?>