<?php
	class Statistic_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}
		public function add(){
			$ip=$this->input->ip_address();
			$this->db->where('ip',$ip);
			$query = $this->db->get('statistika');
				if ($query->num_rows() == 0){
					$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
					$data = array(
						'ip' => $ip,
						'asukoht' => $getloc->country,
						'brauser' =>  $this->agent->browser(),
						'opsüsteem' => $this->agent->platform()
					);
					$this->db->insert('statistika', $data);
			} 	
		}
		public function getlocation() 
		{ 
			$this->db->select('asukoht, COUNT(asukoht) as inimesi');
			$this->db->group_by('asukoht'); 
			$this->db->order_by('inimesi', 'desc'); 
			return $this->db->get('statistika')->result(); 
		} 
		public function getbrowsers() 
		{ 
			$this->db->select('brauser, COUNT(brauser) as inimesi');
			$this->db->group_by('brauser'); 
			$this->db->order_by('inimesi', 'desc'); 
			return $this->db->get('statistika')->result(); 
		} 
		public function getos() 
		{ 
			$this->db->select('opsüsteem, COUNT(opsüsteem) as inimesi');
			$this->db->group_by('opsüsteem'); 
			$this->db->order_by('inimesi', 'desc'); 
			return $this->db->get('statistika')->result();
		} 
	}