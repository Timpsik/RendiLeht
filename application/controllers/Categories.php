<?php
	class Categories extends CI_Controller{
		
		public function index(){

			$data['title'] = 'Categories';
			$data['content'] = 'Erinevad kategooriad, mille kaudu saab kuulutusi sorteerida';
			$data['categories'] = $this->category_model->get_kategooriad();
			$this->load->view('templates/header',$data);
			$this->load->view('categories/index', $data);
			$this->load->view('templates/footer');
		}
		
		public function items($id){

			$data['title'] = $this->category_model->get_kategooria($id)->kategooria;
			$data['content'] = 'Antud kategooria kuulutused';
			$data['items'] = $this->item_model->get_esemed_kategooria_järgi($id);
			$this->load->view('templates/header',$data);
			$this->load->view('items/index', $data);
			$this->load->view('templates/footer');
		}
	}