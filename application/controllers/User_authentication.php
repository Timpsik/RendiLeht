<?php
//Klass, mis tegeleb logimise ja registreerimisega
Class User_Authentication extends CI_Controller {

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
$this->load->model('mail_model');
}

// Show login page
public function index() {
$this->load->view('logi_sisse');
}

// Show registration page
public function user_registration_show() {
$this->load->view('registreeru');
}

// Validate and store registration data in database
public function new_user_registration() {

// Check validation for user input in SignUp form
$this->form_validation->set_rules('eesnimi', 'Eesnimi', 'trim|required');
$this->form_validation->set_rules('perenimi', 'Perenimi', 'trim|required');
$this->form_validation->set_rules('email', 'E-mail', 'trim|required');
$this->form_validation->set_rules('parool', 'Parool', 'trim|required');
if ($this->form_validation->run() == FALSE) {
$this->load->view('registreeru');
} else {
$data = array(
'user_mail' => $this->input->post('email'),
'user_password' => $this->input->post('parool')
);
$result = $this->login_database->registration_insert($data);
if ($result == TRUE) {
$data['eesnimi']=$this->input->post('eesnimi');
$this->mail_model->registration_mail($data);
$data['message_display'] = 'Registration Successfully !';
$this->load->view('logi_sisse', $data);
} else {
$data['message_display'] = 'email already exist!';
$this->load->view('registreeru', $data);
}
}
}

// Check for user login process
public function user_login_process() {

$this->form_validation->set_rules('meil', 'E-mail', 'trim|required');
$this->form_validation->set_rules('parool', 'Parool', 'trim|required');

if ($this->form_validation->run() == FALSE) {
if(isset($this->session->userdata['logged_in'])){
redirect(base_url('Pages/view'));
}else{
$this->load->view('logi_sisse');
}
} else {
$data = array(
'email' => $this->input->post('meil'),
'parool' => $this->input->post('parool')
);
$result = $this->login_database->login($data);
if ($result == TRUE) {
$email = $this->input->post('meil');
$result = $this->login_database->read_user_information($email);

if ($result != FALSE) {
$session_data = array(
'email' => $result[0]->user_mail
);
// Add user data in session
$this->session->set_userdata('logged_in', $session_data);
redirect(base_url('Pages/view'));

}
} else {
$data = array(
'error_message' => 'Invalid Username or Password'
);
$this->load->view('logi_sisse', $data);
}
}
}

// Logout from admin page
public function logout() {

// Removing session data
$sess_array = array(
'email' => ''
);
$this->session->unset_userdata('logged_in', $sess_array);
$data['message_display'] = 'Successfully Logout';
$this->load->view('logi_sisse', $data);
}

}

?>