<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlerbuton2 extends CI_Controller {
	public function __construct()
    {
    parent::__construct();
    $this->load->model('consultas_model');
    }
	

	public function index()
	{
		$data['empleados'] = $this->consultas_model->obtenerEmpleados();
		$this->load->view('consulta2',$data);
	}
}