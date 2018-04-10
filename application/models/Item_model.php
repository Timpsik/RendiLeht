<?php
	class Item_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_esemed($slug = FALSE, $limit = FALSE, $offset = FALSE){
			
			if($limit)
				$this->db->limit($limit, $offset);
			
			if($slug === FALSE){
				$this->db->order_by('v_esemed.id', 'DESC');
				$this->db->join('v_kategooriad', 'v_kategooriad.id = v_esemed.kategooria_id');
				
				$query = $this->db->get('v_esemed');
				return $query->result_array();
			}
					$this->db->join('v_hinnad', 'v_hinnad.id = v_esemed.hinna_id');
			$query = $this->db->get_where('v_esemed', array('slug' => $slug));
			return $query->row_array();
		}

		public function lisa_ese($item_image){
			$slug = url_title($this->input->post('nimi'));

			
			$nimi = $this->input->post('nimi');
				$slug = $slug;
				$lyhikirjeldus = $this->input->post('lühikirjeldus');
				$kirjeldus = $this->input->post('kirjeldus');
				$maakond = $this->input->post('maakond');
				$aadress = $this->input->post('aadress');
				$kategooria_id = $this->input->post('kategooria_id');							
				$item_image = $item_image;
				$kasutaja_id = $this->session->userdata('user_id');
				$tund = $this->input->post('tund');
				$päev = $this->input->post('päev');
				$nädal = $this->input->post('nädal');
				$kuu = $this->input->post('kuu');
				
            $query = $this->db->query("CALL lisa_ese('$nimi','$slug','$lyhikirjeldus', '$kirjeldus', '$maakond', '$aadress', '$kategooria_id', '$item_image', '$kasutaja_id' , '$tund' , '$päev' , '$nädal' , '$kuu')");
		//	return $this->db->insert('esemed', $data);
		}

		public function kustuta_ese($id){

			$query = $this->db->query("CALL kustuta_ese($id)");

			return true;
		}

		public function update_item(){

			$slug = url_title($this->input->post('pealkiri'));
            $nimi = $this->input->post('nimi');
				$lyhikirjeldus = $this->input->post('lühikirjeldus');
				$kirjeldus = $this->input->post('kirjeldus');
				$kategooria_id = $this->input->post('kategooria_id');
            $id=$this->input->post('id');
             $query = $this->db->query("CALL uuenda_ese($id,'$nimi','$slug','$lyhikirjeldus', '$kirjeldus', '$kategooria_id')");
		
		}

		public function get_kategooriad(){

			$this->db->order_by('kategooria');
			$query = $this->db->get('v_kategooriad');

			return $query->result_array();
		}

		public function get_esemed_kategooria_järgi($category_id){

			$this->db->order_by('v_esemed.id', 'DESC');
			$this->db->join('v_kategooriad', 'v_kategooriad.id = v_esemed.kategooria_id');

			$query = $this->db->get_where('v_esemed', array('kategooria_id' => $category_id));
			
			return $query->result_array();
		}

	}