<?php
	class Comment_model extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function lisa_kommentaar($eseme_id){
            $tekst=$this->input->post('tekst');
			$autor = $this->input->post('autor');
			$postitaja_id = $this->input->post('autori_id');
            $query = $this->db->query("CALL lisa_kommentaar($eseme_id,'$tekst','$postitaja_id','$autor')");
			
		}

		public function get_kommentaarid($eseme_id){

			$query = $this->db->get_where('v_kommentaarid', array('eseme_id' => $eseme_id));
			
			return $query->result_array();
		}
	}