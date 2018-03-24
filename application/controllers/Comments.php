<?php
	class Comments extends CI_Controller{
		
		public function create($eseme_id){

			$slug = $this->input->post('slug');
			$data['ese'] = $this->item_model->get_esemed($slug);

			$this->form_validation->set_rules('tekst', 'Tekst', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('items/view', $data);
				$this->load->view('templates/footer');
			} 
			else {
				$this->comment_model->lisa_kommentaar($eseme_id);
				redirect('items/'.$slug);
			}
		}
	}