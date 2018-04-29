<?php
	class Eseme_mudel extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}

		public function get_esemed($slug = FALSE, $limit = FALSE, $offset = FALSE, $kasutaja_esemed = FALSE){

			if ($kasutaja_esemed === TRUE)
				$this->db->where('kasutaja_id', $this->session->userdata('kasutaja_id'));
			
			if($limit)
				$this->db->limit($limit, $offset);
			
			if($slug === FALSE){
				$this->db->order_by('v_esemed.id', 'DESC');
				$this->db->join('v_kategooriad', 'v_kategooriad.id = v_esemed.kategooria_id');
				
				$päring = $this->db->get('v_esemed');
				
				return $päring->result_array();
			}

			$this->db->join('v_hinnad', 'v_hinnad.id = v_esemed.hinna_id');
			$päring = $this->db->get_where('v_esemed', array('slug' => $slug));
			return $päring->row_array();
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
				$kasutaja_id = $this->session->userdata('kasutaja_id');
				$tund = $this->input->post('tund');
				$päev = $this->input->post('päev');
				$nädal = $this->input->post('nädal');
				$kuu = $this->input->post('kuu');
				
            $päring = $this->db->päring("CALL lisa_ese('$nimi','$slug','$lyhikirjeldus', '$kirjeldus', '$maakond', '$aadress', '$kategooria_id', '$item_image', '$kasutaja_id', '$tund' , '$päev', '$nädal', '$kuu')");

		}

		public function kustuta_ese($id){

			$päring = $this->db->päring("CALL kustuta_ese($id)");

			return true;
		}

		public function uuenda_eset(){

				$slug = url_title($this->input->post('pealkiri'));
            	$nimi = $this->input->post('nimi');
				$lühikirjeldus = $this->input->post('lühikirjeldus');
				$kirjeldus = $this->input->post('kirjeldus');
				$kategooria_id = $this->input->post('kategooria_id');


            	$id=$this->input->post('id');
             	$päring = $this->db->päring("CALL uuenda_ese($id,'$nimi','$slug','$lühikirjeldus', '$kirjeldus', '$kategooria_id')");
		}

		public function get_kategooriad(){

			$this->db->order_by('kategooria');
			$päring = $this->db->get('v_kategooriad');

			return $päring->result_array();
		}

		public function get_esemed_kategooria_järgi($category_id){

			$this->db->order_by('v_esemed.id', 'DESC');
			$this->db->join('v_kategooriad', 'v_kategooriad.id = v_esemed.kategooria_id');

			$päring = $this->db->get_where('v_esemed', array('kategooria_id' => $category_id));
			
			return $päring->result_array();
		}

		public function get_kuulutuste_arv(){

			$päring = $this->db->get('v_kuulutuste_arv');

			return $päring->result_array();
		}
	}