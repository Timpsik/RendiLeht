<?php
	class Statistics extends CI_Controller{
		
		function __construct() 
        { 
        parent::__construct(); 
        $this->load->model('Statistic_model'); 
 
        // $this->load->library('form_validation'); 
 
        $this->load->helper('string'); 
        } 
		
		public function view(){
			$data['ip']=$this->input->ip_address();
			$data['title'] = "Statistika";
			$data['content'] ="Meie avalehe külastajate põhjal koostatud statistika";
			$this->load->view('templates/header', $data);
			$this->load->view('statistics/view', $data);
			$this->load->view('templates/footer');
		}
		public function getlocdata(){
			$data = $this->Statistic_model->getlocation(); 
			
			$responce->cols[] = array( 
            "id" => "", 
            "label" => "Country", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->asukoht", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->inimesi, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
		public function getbroswerdata(){
		$data = $this->Statistic_model->getbrowsers(); 
			
			$responce->cols[] = array( 
            "id" => "", 
            "label" => "Browser", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->brauser", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->inimesi, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
		
		public function getosdata(){
			$data = $this->Statistic_model->getos(); 
			
			$responce->cols[] = array( 
            "id" => "", 
            "label" => "OS", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->opsüsteem", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->inimesi, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
		
		}
	
?>