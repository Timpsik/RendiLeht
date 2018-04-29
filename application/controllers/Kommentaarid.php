<?php
	class Kommentaarid extends CI_Controller{
		
		public function lisa($eseme_id){

			$slug = $this->input->post('slug');
			$andmed['ese'] = $this->eseme_mudel->get_esemed($slug);

			$this->form_validation->set_rules('tekst', 'Tekst', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('mallid/header');
				$this->load->view('esemed/vaata', $andmed);
				$this->load->view('mallid/footer');
			} 
			else {
				$this->kommentaari_mudel->lisa_kommentaar($eseme_id);
				redirect('esemed/'.$slug);
			}
		}
	}
?>