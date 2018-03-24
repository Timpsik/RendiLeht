<?php
	class User_model extends CI_Model{


		public function register($enc_password){

			$data = array(
				'eesnimi' => $this->input->post('eesnimi'),
				'perenimi' => $this->input->post('perenimi'),
				'email' => $this->input->post('email'),
				'telefon' => $this->input->post('telefon'),
                'parool' => $enc_password);

			return $this->db->insert('kasutajad', $data);
		}

		public function login($email, $parool){

			$this->db->where('email', $email);
			$this->db->where('parool', $parool);

			$result = $this->db->get('kasutajad');

			if($result->num_rows() == 1)
				return $result->row(0)->id;
			else 
				return false;
			
		}

		public function kontrolli_emaili_leidumist($email){

			$query = $this->db->get_where('kasutajad', array('email' => $email));
			
			if(empty($query->row_array()))
				return true;
			else 
				return false;			
		}

		

	}