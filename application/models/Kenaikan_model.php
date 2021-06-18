<?php 
defined('BASEPATH') OR exit('No Direct script access allowed');

class Kenaikan_model extends CI_Model{

    
    public function pencarian($nis,$tingkat,$kompli){		
		return $this->db->query("SELECT * FROM `2021` WHERE nis = $nis AND tingkat = $tingkat AND kompli = '$kompli' " );
	}
    
}
?>