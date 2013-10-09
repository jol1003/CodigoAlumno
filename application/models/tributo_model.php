<?php

class Tributo_model extends CI_Model {

    public function __construct() {
        // Call the Model constructor
        parent::__construct();
		
    }
	
	
	
	public function get_listar($ruc){
		$query = $this->db->query("SELECT *
									FROM 
									tributos 
									WHERE ruc = ?", array($ruc));
        return $query->result_array();
	}
	
}
?>