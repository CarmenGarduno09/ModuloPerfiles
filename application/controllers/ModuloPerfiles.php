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
	public function enviar_email(){
		$this->load->library('email');
		$htmlContent = '<h1> Estimado '.$this->input->post('nom').'</h1>';
		$htmlContent .= '<p>'.$this->input->post('mensaje').'.</p>';
			
		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->from($this->input->post('correo_e'),$this->input->post('empresa'));
		$this->email->to($this->input->post('correo_d'));
		$this->email->subject($this->input->post('asunto'));
		$this->email->message($htmlContent);
		if($this->email->send()){
			$data = array(
				'numero' => 'REP',
				'activo' => 1,
				'tipo' => '1',
				'status' => 'In progress',
				'nombre_empresa' => $this->input->post('empresa'),
				'perfil_alumno_id_perfil' => $this->input->post('id_a')
			);
			if($this->Modelo_ModuloPerfiles->insertar_reporte($data)){
				echo "OK";
			}else echo "NO";
			
		}else{
			$data = array(
				'numero' => 'REP',
				'activo' => 1,
				'tipo' => '1',
				'status' => 'In progress',
				'nombre_empresa' => $this->input->post('empresa'),
				'perfil_alumno_id_perfil' => $this->input->post('id_a')
			);
			if($this->Modelo_ModuloPerfiles->insertar_reporte($data)){
				echo "OK";
			}else echo "NO";
		} 
	}


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
