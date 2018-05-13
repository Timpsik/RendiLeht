<?php
	class Pages extends CI_Controller{

		public function view($page = 'esileht'){

			$this->load->library('user_agent');

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
				show_404();

			$andmed['pealkiri'] = "Rendi kõike";
			$andmed['sisu'] ="See leht on mõeldud inimestele, kes soovivad oma kodus kasutamata olevaid asju teistele välja rentida ja neile, kes ei soovi raha kulutada asjade  ostmisele, et neid ühe korra kasutada, vaid eelistavad selle rentida. Pakume kuulutusi paljudes erinevates kategooriates ja üle Eesti.";

			$this->load->helper('date');
			$this->load->model('statistika_mudel');
			$this->statistika_mudel->lisa();
			$this->session->set_userdata('page_url',  current_url());
			$this->load->view('mallid/avalehe_header', $andmed);
			$this->load->view('pages/'.$page, $andmed);
			$this->load->view('mallid/footer');
		}
	}
?>