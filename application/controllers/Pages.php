<?php
class Pages extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->load->model('pages_model');
                $this->load->helper('url_helper');
        }

        public function view($page = 'home')
{		
        $this->load->view('pages/'.$page);
}
	public function logimine()
{
        $this->load->view('pages/logimine');
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
	$this->load->helper('form');
    $this->load->library('form_validation');
	$this->load->library("phpmailer_library");

    $data['Person'] = 'Add person';

    $this->form_validation->set_rules('meil', 'E-meil', 'required');
    $this->form_validation->set_rules('nimi', 'Nimi', 'required');
	
	$nimi=$this->input->post('nimi');
	$meil=$this->input->post('meil');
	
    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('pages/regamine');
    }
    else
    {

		$email = $this->phpmailer_library->load();
	
	$email->setFrom('rendileht@gmail.com', 'Mailer');
	$email->addAddress($meil, $nimi);
	$email->Subject = 'Your email subject would go here';
	$email->isHTML(true);
	$email->Body = 'Your email content would go here. You can use HTML Tags but ensure you set the HTML email option to true or HTML will not work.';
	$email->IsSMTP(); // telling the class to use SMTP
	$email->Host = "smtp.gmail.com";
	$email->SMTPDebug = 2;
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
	$this->pages_model->add_people($nimi,$meil);
        $this->logitud();
    }
}
}
?>
