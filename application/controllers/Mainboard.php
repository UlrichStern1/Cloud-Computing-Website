<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('pelanggan');
		// $this->load->model('m_order');
		// $this->load->model('m_user');
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}
	/**
	 * Menampilkan data yang sudah diimport.
	 *
	 */
	public function index()
	{
		$data['konten'] = $this->m_data->ambil_data();
		$this->load->view('auxilaries/header');
		$this->load->view('v_index', $data);
		$this->load->view('auxilaries/footer');
	}

	public function category()
	{
		$data['konten'] = $this->m_data->ambil_data();
		$this->load->view('auxilaries/header2');
		$this->load->view('v_category', $data);
		$this->load->view('auxilaries/footer');
	}

	public function login()
	{
		$this->load->view('');
	}

	public function berita($no = null)
	{
		if (!isset($no)) redirect('mainboard/berita');

        $konten = $this->m_data;
        $validation = $this->form_validation;
        $validation->set_rules($konten->rules());


        if ($validation->run()) {
            $konten->update_data();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["konten"] = $konten->getById($no);
        if (!$data["konten"]) show_404();

        $this->load->view('auxilaries/header2');
        $this->load->view('v_berita',$data);
        $this->load->view('auxilaries/footer');
	}

}
?>