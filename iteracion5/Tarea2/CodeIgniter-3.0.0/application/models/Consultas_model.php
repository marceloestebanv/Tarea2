<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultas_model extends CI_model {
	public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

	
    function obtenerEmpleados($ini,$fin){
    if($ini != "" and $fin != ""){
	  	$query = $this->db->query('SELECT emp_no FROM employees where gender = "M" OR first_name = "Mary" LIMIT '.$ini.','.$fin);  
    }
    else{
	  	$query = $this->db->query('SELECT emp_no FROM employees where gender = "M" OR first_name = "Mary"');  
    }
		if ($query->num_rows() > 0 ) return $query;
		else return false;		
	}    


	function obtenerSalarios($ini,$fin){
		if($ini != "" and $fin != ""){
			$query = $this->db->query('SELECT emp_no, salary FROM salaries where salary IN("88208", "40000") LIMIT '.$ini.','.$fin);
		}
		else{
			$query = $this->db->query('SELECT emp_no, salary FROM salaries where salary IN("88208", "40000")');	
		}
		if ($query->num_rows() > 0 ) return $query;
		else return false;		
	}

	function consultaPro($ini,$fin){
		if($ini != "" and $fin != ""){
			$query = $this->db->query("SELECT a.first_name, a.last_name, s.salary, d.dept_name, t.title FROM employees a
INNER JOIN salaries s ON a.emp_no=s.emp_no
INNER JOIN titles t ON a.emp_no=t.emp_no
INNER JOIN dept_emp e ON a.emp_no=e.emp_no
INNER JOIN departments d ON e.dept_no=d.dept_no
WHERE s.to_date between str_to_date ('1900-01-01','%Y-%m-%d') and str_to_date ('2000-01-01','%Y-%m-%d') and t.title='Senior Engineer'
group by a.last_name  LIMIT ".$ini.",".$fin);
		}
		else{
			$query = $this->db->query("SELECT a.first_name, a.last_name, s.salary, d.dept_name, t.title FROM employees a
INNER JOIN salaries s ON a.emp_no=s.emp_no
INNER JOIN titles t ON a.emp_no=t.emp_no
INNER JOIN dept_emp e ON a.emp_no=e.emp_no
INNER JOIN departments d ON e.dept_no=d.dept_no
WHERE s.to_date between str_to_date ('1900-01-01','%Y-%m-%d') and str_to_date ('2000-01-01','%Y-%m-%d') and t.title='Senior Engineer'
group by a.last_name");	
		}
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	
}