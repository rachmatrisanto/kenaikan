<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class Kenaikan extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('Kenaikan_model');
	}

	public function index(){	
		$this->load->view('view_hasil');
	}

	public function aksi(){
		$nis = $this->input->post('nis');
		$tingkat = $this->input->post('tingkat');
		$kompli = $this->input->post('kompli');
		$cek = $this->Kenaikan_model->pencarian($nis,$tingkat,$kompli);
		$data = $cek->row_array();
		if($cek->num_rows()>=1) {
			$data_session = array(
				'id' 	=> $data["id"],
				'nis'=> $data["nis"],
				'nama'	=> $data["nama"],
				'kompli'	=> $data["kompli"],
				'rombel'	=> $data["rombel"],
				'status'	=> $data["status"],
				'rombelbaru'	=> $data["rombelbaru"],
				);
			$this->session->set_userdata($data_session);
			redirect(site_url('Kenaikan'));
		} else {
			$this->session->sess_destroy();
			echo "<script>alert('Data Tidak Ditemukan');window.location='".site_url('Cover')."'</script>";
		}
	}

	function kembali(){
		$this->session->sess_destroy();
		redirect(site_url('Cover'));
	}
}
?>