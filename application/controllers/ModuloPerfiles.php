<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModuloPerfiles extends CI_Controller {
    //Cargar modelo
    public function __construct(){
		parent::__construct();
        date_default_timezone_set('America/Mexico_City');
		$this->load->model('Modelo_ModuloPerfiles');
  }
    
	public function index()
	{
		$this->load->view('templates/perfiles/modulo_perfiles');
	}

	//área Maury
	public function perfiles_usuario(){
		$data['perfiles']=$this->Modelo_ModuloPerfiles->traer_perfiles_usuario();
		$data['carreras']=$this->Modelo_ModuloPerfiles->traer_carreras();
		$this->load->view('templates/perfiles/modulo_perfiles_user',$data);
	}


	//--Fin área Maury


	
	//área Jessi
	


	//--Fin área Jessi



	//área Carmen
	


	//--Fin área Carmen
}
