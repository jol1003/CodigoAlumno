<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require_once(APPPATH . '/controllers/test/Toast.php');   
 
class Tributo_tests extends Toast { 

	/**ini
	 * Index Page for this controller. 
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index 
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/ 
	 *
	 * So any other public methods not prefixed with an underscore will 
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function Tributo_tests() {
        parent::Toast(__FILE__);
		$this->load->model('tributo_model');
        //$this->load->model('m_inscripcion');
		
		//$this->db_sqlserver = $this->load->database('sqlserver', TRUE); //activa el acceso a MsSQLSERVER
		//$this->load->library("nuSoap_lib");
    }
	
	function _pre() {}

	/**
	 * OPTIONAL; Anything in this function will be run after each test
	 * I use it for setting $this->message = $this->My_model->getError();
	 */
	function _post() {}
	
	function test_listado_tributos(){
		$cantidad = 3;
		$data = $this->tributo_model->get_listar('20516755416');
		$this->_assert_equals($cantidad, count($data));
		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */