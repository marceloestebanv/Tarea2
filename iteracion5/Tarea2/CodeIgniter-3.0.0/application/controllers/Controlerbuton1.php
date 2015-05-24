<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlerbuton1 extends CI_Controller {
	public function __construct()
    {
    parent::__construct();
    $this->load->model('consultas_model');
    }
	
	public function index()
	{
		$ini = $_POST['ini'];
		$fin = $_POST['fin'];
		$data['empleados'] = $this->consultas_model->obtenerEmpleados($ini,$fin);
		$this->load->view('consulta1',$data);
	}
}