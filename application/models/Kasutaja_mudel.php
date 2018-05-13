<?php
	class Kasutaja_mudel extends CI_Model{

		public function registreerimine($krüpteeritud_parool){
			$eesnimi = $this->input->post('eesnimi');
			$perenimi = $this->input->post('perenimi');
			$email = $this->input->post('email');
			$telefon = $this->input->post('telefon');
			$parool = $krüpteeritud_parool;

			$päring = $this->db->query("CALL lisa_kasutaja('$eesnimi','$perenimi','$email', '$telefon', '$parool')");
		}

		public function sisselogimine($email, $parool = FALSE, $smartID = FALSE){

			$this->db->where('email', $email);

			if(!$smartID)
				$this->db->where('parool', $parool);

			$päring = $this->db->get('v_kasutajad');

			if($päring->num_rows() == 1){
				$andmed = array(
					'kasutaja_id'=>$päring->row(0)->id,
					'kasutaja_eesnimi'=>$päring->row(0)->eesnimi);
				return $andmed;
			}
			else 
				return false;	
		}

		public function andmete_muutmine(){

			$this->db->where('id', $this->session->userdata('kasutaja_id'));

			$päring = $this->db->get('v_kasutajad');

			$andmed = array(
				'eesnimi'=>$päring->row(0)->eesnimi,
				'perenimi'=>$päring->row(0)->perenimi,
				'email'=>$päring->row(0)->email,
				'telefon'=>$päring->row(0)->telefon);		
			return $andmed;
		}

		public function kontrolli_emaili_leidumist($email){

			$päring = $this->db->get_where('v_kasutajad', array('email' => $email));
			
			if(empty($päring->row_array()))
				return true;
			else 
				return false;			
		}
        public function kasutaja_kustutamine(){
            $id=$this->session->userdata('kasutaja_id');
            $this->db->query("CALL kustuta_kasutaja('$id')");
        }
        
        public function uuendamine($krüpteeritud_parool){
            $id = $this->session->userdata('kasutaja_id');
			$eesnimi = $this->input->post('eesnimi');
			$perenimi = $this->input->post('perenimi');
			$email = $this->input->post('email');
			$telefon = $this->input->post('telefon');
			$parool = $krüpteeritud_parool;

			$päring = $this->db->query("CALL uuenda_kasutaja('$id','$eesnimi','$perenimi','$email', '$telefon', '$parool')");
		}
	}