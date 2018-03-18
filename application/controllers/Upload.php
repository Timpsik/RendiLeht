<?php
//Klass, mis tegeleb hetkel kuulutuste lisamisega
class Upload extends CI_Controller {
public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');
//$this->load->helper('url');

// Load form validation library
$this->load->library('form_validation');

// Load session library
//$this->load->library('session');

// Load database
$this->load->model('login_database');

}
public function fail()
{
	$this->form_validation->set_rules('Pealkiri', 'Pealkiri', 'trim|required');
	$this->form_validation->set_rules('Kirjeldus', 'Kirjeldus', 'trim|required');
	$this->form_validation->set_rules('Telefon', 'Telefon', 'trim|required');
	$this->form_validation->set_rules('Tund', 'Tund', 'required');
	$this->form_validation->set_rules('Päev', 'Päev', 'required');
	$this->form_validation->set_rules('Nädal', 'Nädal', 'required');
	$this->form_validation->set_rules('Kuu', 'Kuu', 'required');
//	$this->form_validation->set_rules('Pilt', 'Pilt', 'required');
	
	if ($this->form_validation->run() == FALSE) {
		$this->load->view('pages/lisa_kuulutus');
	} else {
	$data = array(
	'pealkiri' => $this->input->post('Pealkiri'),
	'kategooria' => 'Mangud' ,//$this->input->post('Kategooria'),
	'kirjeldus' => $this->input->post('Kirjeldus'),
	'telefon' => $this->input->post('Telefon'),
	'tund' => $this->input->post('Tund'),
	'päev' => $this->input->post('Päev'),
	'nädal' => $this->input->post('Nädal'),
	'kuu' => $this->input->post('Kuu'),
	'omanik' => ($this->session->userdata['logged_in']['email']),
	'pilt' => $this->input->post('Pilt')
	);
	$result = $this->login_database->lisa_kuulutus($data);
	if ($result == TRUE) {
		$data['message_display'] = 'Success';
		$this->load->view('pages/lisa_kuulutus', $data);
	} else {
		$data['message_display'] = 'Failure';
		$this->load->view('pages/lisa_kuulutus', $data);	
}

}
}
}
?>