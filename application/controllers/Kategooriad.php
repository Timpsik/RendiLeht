<?php
	class Kategooriad extends CI_Controller{
		
		public function indeks(){

			$andmed['pealkiri'] = 'Categories';
			$andmed['sisu'] = 'Erinevad kategooriad, mille kaudu saab kuulutusi sorteerida';
			$andmed['kategooriad'] = $this->kategooria_mudel->get_kategooriad();

			$this->load->view('mallid/header',$andmed);
			$this->load->view('kategooriad/indeks', $andmed);
			$this->load->view('mallid/footer');
		}
		
		public function esemed($id){

			$andmed['pealkiri'] = $this->kategooria_mudel->get_kategooria($id)->kategooria;
			$andmed['sisu'] = 'Antud kategooria kuulutused';
			$andmed['esemed'] = $this->eseme_mudel->get_esemed_kategooria_järgi($id);
			$this->session->set_userdata('page_url',  current_url());
			$this->load->view('mallid/header',$andmed);
			$this->load->view('esemed/indeks', $andmed);
			$this->load->view('mallid/footer');
		}
	}
?>