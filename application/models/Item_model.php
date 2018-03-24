<?php
	class Item_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_esemed($slug = FALSE, $limit = FALSE, $offset = FALSE){
			
			if($limit)
				$this->db->limit($limit, $offset);
			
			if($slug === FALSE){
				$this->db->order_by('esemed.id', 'DESC');
				$this->db->join('kategooriad', 'kategooriad.id = esemed.kategooria_id');
				$query = $this->db->get('esemed');
				return $query->result_array();
			}

			$query = $this->db->get_where('esemed', array('slug' => $slug));
			return $query->row_array();
		}

		public function lisa_ese(){
			$slug = url_title($this->input->post('nimi'));

			$data = array(
				'nimi' => $this->input->post('nimi'),
				'slug' => $slug,
				'lühikirjeldus' => $this->input->post('lühikirjeldus'),
				'kirjeldus' => $this->input->post('kirjeldus'),
				'asukoht' => $this->input->post('asukoht'),
				'kategooria_id' => $this->input->post('kategooria_id'),
				'kasutaja_id' => $this->session->userdata('user_id'),
				
			);

			return $this->db->insert('esemed', $data);
		}

		public function kustuta_ese($id){

			$this->db->where('id', $id);
			$this->db->delete('esemed');

			return true;
		}

		public function update_item(){

			$slug = url_title($this->input->post('pealkiri'));

			$data = array(
				'pealkiri' => $this->input->post('pealkiri'),
				'slug' => $slug,
				'lühikirjeldus' => $this->input->post('lühikirjeldus'),
				'kirjeldus' => $this->input->post('kirjeldus'),
				'kategooria_id' => $this->input->post('kategooria_id')
			);

			$this->db->where('id', $this->input->post('id'));

			return $this->db->update('esemed', $data);
		}

		public function get_kategooriad(){

			$this->db->order_by('kategooria');
			$query = $this->db->get('kategooriad');

			return $query->result_array();
		}

		public function get_esemed_kategooria_järgi($category_id){

			$this->db->order_by('esemed.id', 'DESC');
			$this->db->join('kategooriad', 'kategooriad.id = esemed.kategooria_id');

			$query = $this->db->get_where('esemed', array('kategooria_id' => $category_id));
			
			return $query->result_array();
		}

	}