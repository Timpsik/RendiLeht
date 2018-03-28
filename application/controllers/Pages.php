<?php
	class Pages extends CI_Controller{

		public function view($page = 'home'){
			$this->load->library('user_agent');
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
				show_404();

			$data['title'] = ucfirst($page);
			$this->load->helper('date');
			$this->load->model('Statistic_model');
			$getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		//	 $data['location'] =  $getloc->city;
		//	$data['browser'] = $this->agent->browser();
	//		$data['platform'] = $this->agent->platform();
			$this->Statistic_model->add();
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}