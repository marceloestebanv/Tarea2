<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_model extends CI_model {
	public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

		
	function obtenerEmpleados(){
		
		$query = $this->db->query('SELECT last_name from employees LIMIT 0,30');
		if ($query->num_rows() > 0 ) return $query;
		else return false;		
	}
	
}