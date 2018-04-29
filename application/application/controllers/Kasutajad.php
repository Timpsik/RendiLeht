<?php
	class Kasutajad extends CI_Controller{

		public function registreerimine(){

			$andmed['pealkiri'] = 'Registreeri';
			$andmed['sisu'] ="Registreeri uus kasutaja, et lisada kuulutusi ja rentida esemeid.";
			
			$this->load->model('emaili_mudel');
			
			$this->form_validation->set_rules('eesnimi', 'Eesnimi', 'required');
			$this->form_validation->set_rules('perenimi', 'Perenimi', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_kontrolli_emaili_leidumist');
			$this->form_validation->set_rules('telefon', 'Parool', 'required');
			$this->form_validation->set_rules('parool', 'Parool', 'required');
			$this->form_validation->set_rules('parool2', 'Parool2', 'matches[parool]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('mallid/header', $andmed);
				$this->load->view('kasutajad/registreerimine', $andmed);
				$this->load->view('mallid/footer');
			} 
			else { 
				$krüpteeritud_parool = md5($this->input->post('parool'));

				$this->kasutaja_mudel->registreerimine($krüpteeritud_parool);
				$this->emaili_mudel->registration_mail($this->input->post('email'));
				$this->session->set_flashdata('user_registered', 'Registreerumine õnnestus'); //php echo lang flashdata korral ei tööta
				
				redirect('esemed');
			}
		}

		public function sisselogimine(){

			$andmed['pealkiri'] = 'Logi sisse';
			$andmed['sisu'] ="Logi oma kasutajaga sisse, et pääseda ligi meie pakutavatele teenustele.";
			
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('parool', 'Parool', 'required');

			if($this->form_validation->run() === FALSE) {
				$this->load->view('mallid/header', $andmed);
				$this->load->view('kasutajad/sisselogimine', $andmed);
				$this->load->view('mallid/footer');
			} 
			else {
				
				$email = $this->input->post('email');
				$parool = md5($this->input->post('parool'));

				$sisselogimise_andmed = $this->kasutaja_mudel->sisselogimine($email, $parool, FALSE);

				if($sisselogimise_andmed){

					$sisselogimise_andmed = array(
						'kasutaja_id' => $sisselogimise_andmed['kasutaja_id'],
						'kasutaja_eesnimi' => $sisselogimise_andmed['kasutaja_eesnimi'],
						'sisselogitud' => true);

					$this->session->set_userdata($sisselogimise_andmed);
					$this->session->set_flashdata('user_loggedin', 'Sisselogimine õnnestus');

						redirect('esemed');
				} 
				else {
					$this->session->set_flashdata('login_failed', 'Sisselogimine ebaõnnestus');

					redirect('kasutajad/sisselogimine');
				}		
			}
		}

		public function smartIDgasisselogimine(){

			$this->load->model('smartid_mudel');
			$this->smartid_mudel->sisselogimine()();
		}

		public function smartIDvastus(){

			$this->load->model('smartid_mudel');

			$smartIDEmail = $this->smartid_mudel->getEmail();
			
			if($smartIDEmail != null){

				if($this->kasutaja_mudel->kontrolli_emaili_leidumist($smartIDEmail)){
					$this->kasutaja_mudel->sisselogimine($smartIDEmail, FALSE, $smartID=TRUE);
				
				redirect('esemed');
			} 
			else {
				$this->session->set_flashdata('email', $smartIDEmail);
				redirect('kasutajad/registreerimine');
			}
		}
	}

		public function valjalogimine(){ 

			$this->session->unset_userdata('sisselogitud');
			$this->session->unset_userdata('kasutaja_id');
			$this->session->unset_userdata('kasutaja_eesnimi');

			$this->session->set_flashdata('user_loggedout', 'Väljalogimine õnnestus');

			redirect('kasutajad/sisselogimine');
		}

		public function kontrolli_emaili_leidumist($email){

			$this->form_validation->set_message('kontrolli_emaili_leidumist', 'See email on juba kasutusel');

			if($this->kasutaja_mudel->kontrolli_emaili_leidumist($email))
				return true;
			else
				return false;
		}

		public function konto() {
			
			$andmed['pealkiri'] = 'Konto';
			$andmed['sisu'] ="Vaata enda kontot puudutavat informatsiooni.";

			$this->load->view('mallid/header', $andmed);
			$this->load->view('kasutajad/konto', $andmed);
			$this->load->view('mallid/footer');
		}
		
		public function seaded() {

			$andmed['pealkiri'] = 'Seaded';
			$andmed['sisu'] ="Vaata oma konto andmeid ja vajaduse korral muuda.";
			$andmed['konto'] = $this->kasutaja_mudel->andmete_muutmine();
			
			$this->load->view('mallid/header', $andmed);
			$this->load->view('kasutajad/seaded', $andmed);
			$this->load->view('mallid/footer');
		}

		public function ajalugu() {

			$andmed['pealkiri'] = 'Ajalugu';
			$andmed['sisu'] ="Vaata oma tehingute ajalugu.";

			//$andmed['konto'] = $this->kasutaja_mudel->ajalugu();
		
			$this->load->view('mallid/header', $andmed);
			$this->load->view('kasutajad/ajalugu', $andmed);
			$this->load->view('mallid/footer');
		}

		public function broneeringud() {

			$andmed['pealkiri'] = 'Seaded';
			$andmed['sisu'] ="Vaata hetkel kehtivaid broneeringuid";
			//$andmed['konto'] = $this->kasutaja_mudel->broneeringud();
			
			$this->load->view('mallid/header', $andmed);
			$this->load->view('kasutajad/broneeringud', $andmed);
			$this->load->view('mallid/footer');
		}

	}
?>
