<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

/**
 * 
 */
class Cover extends CI_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){
		date_default_timezone_set("Asia/Jakarta");
		if(date('d-m-Y H:i') > "18-06-2021 21:45"){
			$this->load->view('halaman_depan');
		} else{
			$this->load->view('belum_dibuka');
		}
		// $this->load->view('halaman_depan');
		
	}

	
}

?>