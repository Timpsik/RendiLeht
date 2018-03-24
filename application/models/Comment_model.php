<?php
	class Comment_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function lisa_kommentaar($eseme_id){

			$data = array(
				'eseme_id' => $eseme_id,
				'tekst' => $this->input->post('tekst')
			);

			return $this->db->insert('kommentaarid', $data);
		}

		public function get_kommentaarid($eseme_id){

			$query = $this->db->get_where('kommentaarid', array('eseme_id' => $eseme_id));
			
			return $query->result_array();
		}
	}