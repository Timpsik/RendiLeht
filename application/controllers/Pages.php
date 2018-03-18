<?php
class Pages extends CI_Controller {
	
	public function __construct()
        {
			
			
                parent::__construct();
                $this->load->helper('url_helper');
				$this->load->helper('language');
				$this->lang->load('main_lang','estonian ');
        }

        public function view()
{		
		if(isset($this->session->userdata['logged_in'])){
			$this->load->view('pages/home_sisselogitud');
		}else{
			$this->load->view('pages/home');
}
}

public function tingimused()
{		
        $this->load->view('pages/tingimused');
}
public function minu_kuulutused()
{
		$this->load->model('login_database');
		$data['kuulutus']=$this->login_database->kuulutused(($this->session->userdata['logged_in']['email']));
        $this->load->view('pages/minu_kuulutused', $data);
		
}

}
?>
