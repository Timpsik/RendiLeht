<?php
	class Esemed extends CI_Controller{

		public function indeks($offset = 0){	

			$konfiguratsioon['base_url'] = base_url() . 'esemed/indeks/';
			$konfiguratsioon['total_rows'] = $this->db->count_all('esemed');
			$konfiguratsioon['per_page'] = 3;
			$konfiguratsioon['uri_segment'] = 3;
			$konfiguratsioon['attributes'] = array('class' => 'pagination-link');

			$this->pagination->initialize($konfiguratsioon);
			$this->session->set_userdata('page_url',  current_url());
			$andmed['pealkiri'] = 'Viimati lisatud';
			$andmed['sisu'] = 'Lehele viimati lisatud kuulutused';
			$andmed['esemed'] = $this->eseme_mudel->get_esemed(FALSE, $konfiguratsioon['per_page'], $offset);
		
			$this->load->view('mallid/header',$andmed);
			$this->load->view('esemed/indeks', $andmed);
			$this->load->view('mallid/footer');
		}



		public function vaata($slug = NULL){

			$andmed['ese'] = $this->eseme_mudel->get_esemed($slug);
			$eseme_id = $andmed['ese']['id'];

			$andmed['kommentaarid'] = $this->kommentaari_mudel->get_kommentaarid($eseme_id);

			if(empty($andmed['ese']))
				show_404();
			
			$andmed['nimi'] = $andmed['ese']['nimi'];
			$andmed['aadress'] = $andmed['ese']['aadress'];
			$andmed['pealkiri'] = "Kuulutus";
			$this->session->set_userdata('page_url',  current_url());
			$this->form_validation->set_rules('tekst', 'Kommentaar', 'required');

			if ($this->form_validation->run()== TRUE) {
			    $this->kommentaari_mudel->lisa_kommentaar($eseme_id);
			    $andmed['kommentaarid'] = $this->kommentaari_mudel->get_kommentaarid($eseme_id);
            }
        
			$this->load->view('mallid/header', $andmed);
			$this->load->view('esemed/vaata', $andmed);
			$this->load->view('mallid/footer');
		}

        public function lisa_kommentaar(){
            $this->kommentaari_mudel->lisa_kommentaar();
        }
        
		public function lisa(){

			if(!$this->session->userdata('sisselogitud'))
				redirect('kasutajad/sisselogimine');
			
			$andmed['kategooriad'] = $this->eseme_mudel->get_kategooriad();
			$andmed['pealkiri'] = 'Lisa kuulutus';
			$andmed['sisu'] = 'Lisa uus ese, mida soovid välja rentida';

			$this->form_validation->set_rules('nimi', 'Nimi', 'required');
			$this->form_validation->set_rules('kirjeldus', 'Kirjeldus', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('mallid/header', $andmed);
				$this->load->view('esemed/lisa', $andmed);
				$this->load->view('mallid/footer');
			}
			else {
				$konfiguratsioon['upload_path'] = './assets/images/esemed';
				$konfiguratsioon['allowed_types'] = 'gif|jpg|png';
				$konfiguratsioon['max_size'] = '2048';
				$konfiguratsioon['max_width'] = '2000';
				$konfiguratsioon['max_height'] = '2000';

				$this->load->library('upload', $konfiguratsioon);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$item_image = 'noimage.jpg';
				} 
				else {
					$andmed = array('upload_data' => $this->upload->data());
					$item_image = $_FILES['userfile']['name'];
				}

				$this->eseme_mudel->lisa_ese($item_image);
				$this->session->set_flashdata('item_created', 'Eseme lisamine õnnestus');

				redirect('esemed');
			}
		}

		public function kustuta($id){

			if(!$this->session->userdata('sisselogitud'))
				redirect('kasutajad/sisselogimine');
			
			$this->eseme_mudel->kustuta_ese($id);
			$this->session->set_flashdata('item_deleted', 'Eseme kustutamine õnnestus');

			redirect('esemed');
		}

		public function muuda($link){

			if(!$this->session->userdata('sisselogitud'))
				redirect('kasutajad/sisselogimine');
			
			$andmed['ese'] = $this->eseme_mudel->get_esemed($link);

			if($this->session->userdata('kasutaja_id') != $this->eseme_mudel->get_esemed($link)['kasutaja_id'])
				redirect('esemed');

			$andmed['kategooriad'] = $this->eseme_mudel->get_kategooriad();

			if(empty($andmed['ese']))
				show_404();
			
			$andmed['pealkiri'] = 'Muuda kuulutust';
			$andmed['sisu'] = 'Muuda kuulutuse kirjeldust';

			$this->load->view('mallid/header', $andmed);
			$this->load->view('esemed/muuda', $andmed);
			$this->load->view('mallid/footer');
		}

		public function uuenda(){
		
			if(!$this->session->userdata('sisselogitud'))
				redirect('kasutajad/sisselogimine');
			
			$this->eseme_mudel->uuenda_eset();
			$this->session->set_flashdata('item_updated', 'Eseme uuendamine õnnestus');

			redirect('esemed');
		}

		public function minu(){	
			
			$andmed['pealkiri'] = 'Minu kuulutused';
			$andmed['sisu'] = 'Kasutaja poolt lisatud kuulutused';
			$andmed['esemed'] = $this->eseme_mudel->get_esemed(FALSE, FALSE, FALSE, TRUE);
		
			$this->load->view('mallid/header',$andmed);
			$this->load->view('esemed/minu', $andmed);
			$this->load->view('mallid/footer');
		}

		public function kuulutuste_arv() {

        $andmed['kuulutustearv'] = $this->eseme_mudel->get_kuulutuste_arv();
        $this->load->view('mallid/kuulutuste_arv', $andmed);
    }
			
	}
