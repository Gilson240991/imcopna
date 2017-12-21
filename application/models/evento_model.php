<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evento_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function estadoEvento($id){
		$this->db->select('IDent_001_Estado');
		$this->db->from('eventos');
		$this->db->where('IDent_Evento',$id);
		$query = $this->db->get();

		return $query->result();
	}
	function listarDatosEventoPorID($id){
		$this->db->select('*');
		$this->db->from('evento');
		$this->db->where('IDent_Evento',$id);
		$query = $this->db->get();
		if($query->num_rows() > 0 )
        {
            return $query->result();
        }
	}

	function listarDatosPersona($usuario){
		$this->db->select('*');
		$this->db->from('persona');
		$this->db->join('usuario', 'persona.IDent_Persona = usuario.IDent_Persona');
		$this->db->where('usuario.usuario',$usuario);
		$query = $this->db->get();
		if($query->num_rows() > 0 )
        {
            return $query->result();
        }
	}

	//obtenemos el total de filas para hacer la paginación
 function filas()
 {
	 $consulta = $this->db->get('eventos');
	 return  $consulta->num_rows() ;
 }

	 //obtenemos todas las persona a paginar con la función
	 //total_posts_paginados pasando la cantidad por página y el segmento
	 //como parámetros de la misma
 function total_paginados($por_pagina,$segmento)
			 {
					 $consulta = $this->db->get('eventos',$por_pagina,$segmento);
					 if($consulta->num_rows()>0)
					 {
							 foreach($consulta->result() as $fila)
	 {
			 $data[] = $fila;
	 }
									 return $data;
					 }
 }

 function buscar($buscar,$inicio=FALSE,$cantidadregistro=FALSE){
	 $this->db->like("Titulo",$buscar);
	 $this->db->or_like("Descripcion",$buscar);
	 if($inicio!==FALSE && $cantidadregistro!==FALSE){
		 $this->db->limit($cantidadregistro,$inicio);
	 }
	 $consulta = $this->db->get("eventos");
	 return $consulta->result();
 }



 function updateEventos($id,$evento){
	 $this->db->where('', $id);
	$estado= $this->db->update('eventos', $evento);

	 return $estado;
 }

function insertEventos($evento){
	$this->db->insert('eventos',$evento);
}

function insertUsuario($usuario){
	return $this->db->insert('usuario',$usuario);

}
function deleteEvento($id){
	$this->db->where('IDent_Evento', $id);
	return $this->db->delete('eventos');
}

}