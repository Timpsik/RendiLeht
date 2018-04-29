<?php
	class Kategooria_mudel extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function get_kategooriad(){
			$this->db->order_by('id');
			$päring = $this->db->get('v_kategooriad');

			return $päring->result_array();
		}

		public function get_kategooria($id){
			$päring = $this->db->get_where('v_kategooriad', array('id' => $id));
			return $päring->row();
		}
	}