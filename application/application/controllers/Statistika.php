<?php
	class Statistika extends CI_Controller{

        function __construct() { 
            parent::__construct();

            $this->load->model('statistika_mudel'); 
            $this->load->helper('string'); 
        } 
		
		public function vaata(){

			$andmed['ip']=$this->input->ip_address();
			$andmed['pealkiri'] = "Statistika";
			$andmed['sisu'] ="Meie avalehe külastajate põhjal koostatud statistika";

			$this->load->view('mallid/header', $andmed);
			$this->load->view('statistika/vaata', $andmed);
			$this->load->view('mallid/footer');
        }
		
        public function getlocdata(){
			$andmed = $this->statistika_mudel->getlocation(); 
			
			$responce->cols[] = array( 
                "id" => "", 
                "label" => "Country", 
                "pattern" => "", 
                "type" => "string"); 

            $responce->cols[] = array( 
                "id" => "", 
                "label" => "Total", 
                "pattern" => "", 
                "type" => "number" ); 

            foreach($andmed as $cd) { 
                $responce->rows[]["c"] = array( 
                    array( 
                        "v" => "$cd->asukoht", 
                        "f" => null), 
                    array( 
                        "v" => (int)$cd->inimesi, 
                        "f" => null)); 
            } 
            echo json_encode($responce); 
        } 
		
        public function getbroswerdata(){

            $andmed = $this->statistika_mudel->getbrowsers(); 
			
			$responce->cols[] = array( 
                "id" => "", 
                "label" => "Browser", 
                "pattern" => "", 
                "type" => "string"); 

            $responce->cols[] = array( 
                "id" => "", 
                "label" => "Total", 
                "pattern" => "", 
                "type" => "number");


            foreach($andmed as $cd) { 
            
            $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->brauser", 
                    "f" => null), 
                array( 
                    "v" => (int)$cd->inimesi, 
                    "f" => null));
        } 
 
        echo json_encode($responce); 
    } 
		
		public function getosdata(){
			$andmed = $this->statistika_mudel->getos(); 
			
			$responce->cols[] = array( 
                "id" => "", 
                "label" => "OS", 
                "pattern" => "", 
                "type" => "string"); 

            $responce->cols[] = array( 
                "id" => "", 
                "label" => "Total", 
                "pattern" => "", 
                "type" => "number"
            ); 


            foreach($andmed as $cd){ 

                $responce->rows[]["c"] = array( 
                array( 
                    "v" => "$cd->opsüsteem", 
                    "f" => null), 
                array( 
                    "v" => (int)$cd->inimesi, 
                    "f" => null));
            } 
            echo json_encode($responce);
        } 
    }
?>