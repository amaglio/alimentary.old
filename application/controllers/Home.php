<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('Producto_model'); 
	}

	public function index()
	{	
		$data['mix_granola'] = $this->Producto_model->get_mix_granola();
		$data['frutos_secos'] = $this->Producto_model->get_frutos_secos();
		$data['promociones'] = $this->Producto_model->get_promociones();
		$this->load->view('index.php',$data);
	}

 
}
