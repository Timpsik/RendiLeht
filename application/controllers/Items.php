<?php
	class Items extends CI_Controller{
		public function index($offset = 0){	

			$config['base_url'] = base_url() . 'items/index/';
			$config['total_rows'] = $this->db->count_all('esemed');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			$this->pagination->initialize($config);

			$data['title'] = 'Latest items';
			$data['items'] = $this->item_model->get_esemed(FALSE, $config['per_page'], $offset);

			$this->load->view('templates/header');
			$this->load->view('items/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL){

			$data['item'] = $this->item_model->get_esemed($slug);
			$item_id = $data['item']['id'];
			$data['comments'] = $this->comment_model->get_kommentaarid($item_id);

			if(empty($data['item']))
				show_404();
			
			$data['nimi'] = $data['item']['nimi'];
			$data['aadress'] = $data['item']['aadress'];

			$this->load->view('templates/header');
			$this->load->view('items/view', $data);
			$this->load->view('templates/footer');
		}

		public function create(){

			if(!$this->session->userdata('logged_in'))
				redirect('users/login');
			
			$data['title'] = 'Create item';
			$data['categories'] = $this->item_model->get_kategooriad();

			$this->form_validation->set_rules('nimi', 'Nimi', 'required');
			$this->form_validation->set_rules('kirjeldus', 'Kirjeldus', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('items/create', $data);
				$this->load->view('templates/footer');
			} else {
				// Upload Image
				$config['upload_path'] = './assets/images/items';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors = array('error' => $this->upload->display_errors());
					$item_image = 'noimage.jpg';
				} else {
					$data = array('upload_data' => $this->upload->data());
					$item_image = $_FILES['userfile']['name'];
				}

				$this->item_model->lisa_ese();
				$this->session->set_flashdata('item_created', 'Your item has been created');

				redirect('items');
			}
		}

		public function delete($id){

			if(!$this->session->userdata('logged_in'))
				redirect('users/login');
			
			$this->item_model->kustuta_ese($id);
			$this->session->set_flashdata('item_deleted', 'Your item has been deleted');

			redirect('items');
		}

		public function edit($link){

			if(!$this->session->userdata('logged_in'))
				redirect('users/login');
			
			$data['item'] = $this->item_model->get_esemed($link);

			if($this->session->userdata('user_id') != $this->item_model->get_esemed($link)['user_id'])
				redirect('items');

			$data['categories'] = $this->item_model->get_kategooriad();

			if(empty($data['item']))
				show_404();
			
			$data['title'] = 'Edit item';

			$this->load->view('templates/header');
			$this->load->view('items/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
		
			if(!$this->session->userdata('logged_in'))
				redirect('users/login');
			
			$this->item_model->update_item();
			$this->session->set_flashdata('item_updated', 'Your item has been updated');

			redirect('items');
		}

		public function myitems($offset = 0){	

			$config['base_url'] = base_url() . 'items/myitems/';
			$config['total_rows'] = $this->db->count_all('esemed');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'pagination-link');

			$this->pagination->initialize($config);

			$data['title'] = 'Latest items';
			$data['items'] = $this->item_model->get_esemed(FALSE, $config['per_page'], $offset);

			$this->load->view('templates/header');
			$this->load->view('items/myitems', $data);
			$this->load->view('templates/footer');
		}
	}