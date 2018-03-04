<?php

class Pages extends CI_Controller {



        public function view($page = 'home')

{		

		$this->load->helper('url');

        $this->load->view('pages/'.$page);

}

	public function logimine()

{		$this->load->helper('url');

        $this->load->view('pages/logimine');

}
public function logitud()
{		$this->load->helper('url');
        $this->load->view('pages/logitud');
}
public function tingimused()
{		$this->load->helper('url');
        $this->load->view('pages/tingimused');
}
}

?>