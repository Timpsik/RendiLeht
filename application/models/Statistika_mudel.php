<?php
	class Statistika_mudel extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function lisa(){
			$this->load->library("geolib/geolib");

			$ip_andmed = $this->geolib->ip_info();
			$ip=$ip_andmed['geoplugin_request'];

			$this->db->where('ip',$ip);
			$päring = $this->db->get('v_statistika');

			if ($päring->num_rows() == 0){
				$userdata=$this->geolib->user_agent();
				$asukoht=$ip_andmed['geoplugin_countryName'];

				if($asukoht==null) 
					$asukoht="Could not find";
				
				$brauser =  $userdata['browser'];
				$opsysteem = $userdata['platform'];
				$päring = $this->db->query("CALL lisa_stat('$ip','$asukoht','$brauser', '$opsysteem')");
			} 	
		}
		
		public function getlocation(){ 

			$this->db->select('asukoht, COUNT(asukoht) as inimesi');
			$this->db->group_by('asukoht'); 
			$this->db->order_by('inimesi', 'desc'); 

			return $this->db->get('v_statistika')->result(); 
		} 
		
		public function getbrowsers(){ 

			$this->db->select('brauser, COUNT(brauser) as inimesi');
			$this->db->where("brauser !=''"); 
			$this->db->group_by('brauser'); 
			$this->db->order_by('inimesi', 'desc'); 

			return $this->db->get('v_statistika')->result();
		} 
		
		public function getos(){ 
			$this->db->select('opsüsteem, COUNT(opsüsteem) as inimesi');
			$this->db->where("opsüsteem != 'Unknown Platform' AND opsüsteem!='' "); 
			$this->db->group_by('opsüsteem'); 
			$this->db->order_by('inimesi', 'desc'); 
			
			return $this->db->get('v_statistika')->result();
		} 
	}