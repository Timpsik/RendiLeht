<?php
	class Pages extends CI_Controller{

		public function view($page = 'home'){
			$this->load->library('user_agent');
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
				show_404();

			$data['title'] = "Rendi kõike";
			$data['content'] ="See leht on mõeldud inimestele, kes soovivad oma kodus kasutamata olevaid asju teistele välja rentida ja neile, kes ei soovi raha kulutada asjade ostmisele, et neid ühe
			korra kasutada, vaid eelistavad selle rentida. Pakume kuulutusi paljudes erinevates kategooriates ja üle Eesti.";
			$this->load->helper('date');
			$this->load->model('Statistic_model');
			$this->Statistic_model->add();
			$this->load->view('templates/header', $data);
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}