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
	function traer_perfiles_usuario(){
		//$data = $this->datos_sesion();
		//$id_persona=$data]['id_persona'];
		$id_persona=1;
		$this->db->select('*');
		$this->db->from('perfil_alumno as pa');
		$this->db->join('datos_usuario as p','pa.persona_id_persona = p.id_persona');
		$this->db->join('carreras as c','pa.carreras_idcarreras = c.idcarreras');
		$this->db->where('pa.persona_id_persona',$id_persona);
		$query = $this->db->get();
			return $query->result();
	}
	function traer_carreras(){
		$this->db->select('*');
		$this->db->from('carreras');
		$query = $this->db->get();
			return $query->result();
	}


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