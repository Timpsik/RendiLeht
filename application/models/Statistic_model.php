<?php
	class Statistic_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function add(){
			$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		 
			$data = array(
				'asukoht' => $getloc->city,
				'brauser' =>  $this->agent->browser(),
				'opsüsteem' => $this->agent->platform()
			);
			return $this->db->insert('statistika', $data);
		}
		
		
	}