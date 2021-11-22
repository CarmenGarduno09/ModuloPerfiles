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
		$data['perfiles'] = $this->Modelo_ModuloPerfiles->traer_perfiles();
		$this->load->view('templates/perfiles/modulo_perfiles',$data);
	}

	//área Maury
	


	//--Fin área Maury


	
	//área Jessi
	


	//--Fin área Jessi



	//área Carmen
	public function estudiantes(){
  
		$data['datos_popup'] = $this->Modelo_proyecto->trae_datos_est();
  $this->load->view('templates/panel/Modulo_perfiles',$data);
			
	  }


	//--Fin área Carmen
}
