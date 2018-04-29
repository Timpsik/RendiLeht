<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');
 
class Keelevahetaja extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
   }

	function vaheta_keelt($language = "") {

		$language = ($language != "") ? $language : "estonian";
		$this->session->set_userdata('site_lang', $language);
		redirect($_SERVER['HTTP_REFERER']);
   }
}
?>