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
	public function cambiar_cv(){
		$data['perfiles']=$this->Modelo_ModuloPerfiles->traer_perfiles_usuario();
		$data['carreras']=$this->Modelo_ModuloPerfiles->traer_carreras();
		$tipo = "new_cv-".$this->uri->segment(3);
		$this->Modelo_ModuloPerfiles->cambiar_cv($tipo,$this->uri->segment(3));
		header('Location:'.base_url('index.php/ModuloPerfiles/perfiles_usuario'));
	}


	//--Fin área Maury


	
	//área Jessi
	


	//--Fin área Jessi



	//área Carmen
	


	//--Fin área Carmen
}
