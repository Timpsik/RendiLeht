<?php
class Pages extends CI_Controller {
	
	public function __construct()
        {
			
			
                parent::__construct();
                $this->load->model('pages_model');
                $this->load->helper('url_helper');
				$this->load->helper('language');
				$this->lang->load('main_lang','estonian ');
        }

        public function view($page = 'Home')
{		
        $this->load->view('pages/'.$page);
}
	public function logimine()
{
        $this->load->view('pages/logi_sisse');
}
public function logitud()
{		
        
		$data['person'] = $this->pages_model->get_people();
		$this->load->view('pages/logitud', $data);
        if (empty($data['person']))
        {
                show_404();
        }
}
public function tingimused()
{		
        $this->load->view('pages/tingimused');
}
public function regamine()
{		
	$pealkiri=$this->lang->line('pealkiri');
	
	
	$this->load->helper('form');
    $this->load->library('form_validation');
	$this->load->library("Phpmailer_library");

   

    $this->form_validation->set_rules('email', 'E-meil', 'required');
    $this->form_validation->set_rules('eesnimi', 'Eesnimi', 'required');
	$this->form_validation->set_rules('perenimi', 'Perenimi', 'required');
	$this->form_validation->set_rules('parool', 'Parool', 'required');
	
	$eesnimi=$this->input->post('eesnimi');
	$perenimi=$this->input->post('perenimi');
	$meil=$this->input->post('email');
	$parool=$this->input->post('parool');
	
    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('pages/registreeru');
    }
    else
    {

		$email = $this->phpmailer_library->load();
	
	$email->setFrom('rendileht@gmail.com', 'Rendileht');
	$email->addAddress($meil, $eesnimi);
	$email->Subject = "Tere, $eesnimi";
	$email->isHTML(true);
	$email->Body = 'Tänud, et registreerisid.';
	$email->IsSMTP(); // telling the class to use SMTP
	$email->Host = "smtp.gmail.com";
	$email->SMTPDebug = 0;
	$email->SMTPSecure = 'tls';
	$email->SMTPAuth = true;
	$email->Port = 587;
	$email->Username = "rendileht@gmail.com";
	$email->Password = "Veebirakendus";

	if(!$email->Send())
	{
	   echo "Message could not be sent. 
	";
	   echo "Mailer Error: " . $email->ErrorInfo;
	   exit;
	}

	echo "Message has been sent";
	$this->pages_model->add_people($eesnimi,$perenimi,$meil);
        $this->logitud();
    }
}
public function lisa_kuulutus()
{
        $this->load->view('pages/lisa_kuulutus');
}

}
?>
