<?php
	class Kommentaari_mudel extends CI_Model{

		public function __construct(){
			$this->load->database();
		}

		public function lisa_kommentaar($eseme_id){
            $tekst=$this->input->post('tekst');
			$autor = $this->input->post('autor');
			$postitaja_id = $this->input->post('autori_id');
            $päring = $this->db->query("CALL lisa_kommentaar($eseme_id,'$tekst','$postitaja_id','$autor')");
			
		}

		public function get_kommentaarid($eseme_id, $start = 0){

			$päring = $this->db->get_where('v_kommentaarid', array('eseme_id' => $eseme_id));			return $päring->result_array();
		}
	}

?>