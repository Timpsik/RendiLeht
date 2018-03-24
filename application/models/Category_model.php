<?php
	class Category_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_kategooriad(){
			$this->db->order_by('id');
			$query = $this->db->get('kategooriad');

			return $query->result_array();
		}

		public function get_kategooria($id){
			$query = $this->db->get_where('kategooriad', array('id' => $id));
			return $query->row();
		}
	}