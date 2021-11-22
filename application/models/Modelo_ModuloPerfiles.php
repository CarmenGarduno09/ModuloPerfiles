<?php
class Modelo_ModuloPerfiles extends CI_Model{
    function __construct(){
        parent:: __construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('string');
		$this->load->library('upload');
		$this->load->helper('file');
		//$this->load->library('email');
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('text');
    }

	//área Maury
	


	//--Fin área Maury


	
	//área Jessi
	function traer_perfiles(){
        $this->db->select('pa.*,du.*,car.*,car.Nombre as nom_carr');
        $this->db->from('perfil_alumno as pa');
		$this->db->join('datos_usuario as du','pa.persona_id_persona = du.id_persona');
		$this->db->join('carreras as car','car.idcarreras = carreras_idcarreras');
		$query = $this->db->get();
		return $query->result();
        
    }


	//--Fin área Jessi



	//área Carmen
	


	//--Fin área Carmen
}