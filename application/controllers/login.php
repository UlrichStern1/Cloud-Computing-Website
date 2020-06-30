<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
	}
	/**
	 * Menampilkan data yang sudah diimport.
	 *
	 */
	public function index()
	{
		// $data['pelanggan'] = $this->pelanggan->get_all();
		$this->load->view('v_login');

	}

	public function process()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
 
        $cek_status=$this->m_login->login($user,$pass);
 
        if($cek_status->num_rows() > 0){ 
                $data=$cek_status->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['role']=='admin'){ //Akses admin
                    $this->session->set_userdata('akses','admin');
                    $this->session->set_userdata('ses_nama',$data['user']);
                    redirect('admin');
                }

				else{ //password/username salah
                    echo
					'<script type="text/JavaScript">  
    				alert("Username atau Password Salah"); 
     				</script>'; 
					$this->load->view('v_login');
                }
 
        }else{ //jika login sebagai mahasiswa
                    echo
			'<script type="text/JavaScript">  
    		alert("Username atau Password salah"); 
     		</script>' 
			; 
			$this->load->view('v_login');
                    }
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	
}
?>