<?php if ( ! defined('BASEPATH')) exit('Direct access allowed');
 //Keelevahetuse Controller
class LanguageSwitcher extends CI_Controller
 
{
 
   public function __construct() {
 
       parent::__construct();
		$this->load->helper('url');
   }
 
   function switchLang($language = "") {
 
 
 
       $language = ($language != "") ? $language : "estonian";
 
       $this->session->set_userdata('site_lang', $language);
 
       redirect($_SERVER['HTTP_REFERER']);
 
   }
 
}