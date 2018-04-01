<?php
	class User_model extends CI_Model{


		public function register($enc_password){

			
				$eesnimi = $this->input->post('eesnimi');
				$perenimi = $this->input->post('perenimi');
				$email = $this->input->post('email');
				$telefon = $this->input->post('telefon');
                $parool = $enc_password;

			$query = $this->db->query("CALL lisa_kasutaja('$eesnimi','$perenimi','$email', '$telefon', '$parool')");
		}

		public function login($email, $parool){

			$this->db->where('email', $email);
			$this->db->where('parool', $parool);

			$result = $this->db->get('v_kasutajad');

			if($result->num_rows() == 1)
				return $result->row(0)->id;
			else 
				return false;
			
		}

		public function kontrolli_emaili_leidumist($email){

			$query = $this->db->get_where('v_kasutajad', array('email' => $email));
			
			if(empty($query->row_array()))
				return true;
			else 
				return false;			
		}

		

	}