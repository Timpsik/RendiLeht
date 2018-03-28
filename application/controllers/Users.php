<?php
	class Users extends CI_Controller{


		public function register(){
			$data['title'] = 'Sign Up';
			$this->load->model('mail_model');
			
			$this->form_validation->set_rules('eesnimi', 'Eesnimi', 'required');
			$this->form_validation->set_rules('perenimi', 'Perenimi', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_kontrolli_emaili_leidumist');
			$this->form_validation->set_rules('telefon', 'Parool', 'required');
			$this->form_validation->set_rules('parool', 'Parool', 'required');
			$this->form_validation->set_rules('parool2', 'Parool2', 'matches[parool]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else { 

				$enc_password = md5($this->input->post('parool'));

				$this->user_model->register($enc_password);
				$this->mail_model->registration_mail($this->input->post('email'));
				$this->session->set_flashdata('user_registered', '<?php echo lang("Registreeritud");?>');
				redirect('items');
			}
			}


		public function registeremail(){

			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('eesnimi', 'Eesnimi', 'required');
			$this->form_validation->set_rules('perenimi', 'Perenimi', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_kontrolli_emaili_leidumist');
			$this->form_validation->set_rules('telefon', 'Parool', 'required');
			$this->form_validation->set_rules('parool', 'Parool', 'required');
			$this->form_validation->set_rules('parool2', 'Parool2', 'matches[parool]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/registeremail', $data);
				$this->load->view('templates/footer');
			} else {

				$enc_password = md5($this->input->post('parool'));

				$this->user_model->register($enc_password);
				$this->session->set_flashdata('user_registered', '<?php echo lang("Registreeritud");?>');
				redirect('items');
			}
		}

		public function login(){

			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('parool', 'Parool', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} 
			else {
				
				$email = $this->input->post('email');
				$parool = md5($this->input->post('parool'));

				$user_id = $this->user_model->login($email, $parool);

				if($user_id){

					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('user_loggedin', 'Sisselogimine õnnestus');

					redirect('items');
				} 
				else {
	
					$this->session->set_flashdata('login_failed', 'Sisselogimine ebaõnnestus');

					redirect('users/login');
				}		
			}
		}

		public function logout(){

			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout', 'Väljalogimine õnnestus');

			redirect('users/login');
		}

		public function kontrolli_emaili_leidumist($email){

			$this->form_validation->set_message('kontrolli_emaili_leidumist', 'See email on juba kasutusel');

			if($this->user_model->kontrolli_emaili_leidumist($email))
				return true;
			else
				return false;
		}

		public function account() {
			$data['title'] = 'Sign In';
			$this->load->view('templates/header');
			$this->load->view('users/account', $data);
			$this->load->view('templates/footer');
		}
	}

