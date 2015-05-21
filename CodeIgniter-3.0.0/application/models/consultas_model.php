<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_model extends CI_model {
	public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

	
    function obtenerEmpleados(){
		$query = $this->db->query('SELECT emp_no FROM employees where gender = "M" OR first_name = "Mary"');
		if ($query->num_rows() > 0 ) return $query;
		else return false;		
	}    


	function obtenerSalarios(){
		$query = $this->db->query('SELECT emp_no, salary FROM salaries where salary ="88208" OR salary= "40000"');
		if ($query->num_rows() > 0 ) return $query;
		else return false;		
	}

	function consultaPro(){
		$query = $this->db->query("SELECT a.first_name, a.last_name, s.salary, d.dept_name, t.title FROM employees a, salaries s, titles t, departments d, dept_emp e WHERE a.emp_no=s.emp_no and a.emp_no=e.emp_no and e.dept_no=d.dept_no and s.to_date between str_to_date ('1900-01-01','%Y-%m-%d') and str_to_date ('2000-01-01','%Y-%m-%d') and t.emp_no=a.emp_no and t.title='Senior Engineer' group by a.last_name");
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	
}