<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

  public function index(){
  	$data['persona']=$this->usu->listarDatosPersona($this->session->userdata('usuario'));
    $this->load->view('admin/guest/header');
    $this->load->view('admin/guest/nav',$data);
	$this->load->view('admin/eventos/index');
    $this->load->view('admin/guest/footer');

  }
  public function mostrar(){
    $buscar = $this->input->post("buscar");
    $numeropagina=$this->input->post("nropagina");
    $cantidad=5;
    $inicio =($numeropagina -1)*$cantidad;
    $data = array("eventos"=>$this->eve->buscar($buscar,$inicio,$cantidad),
    "totalregistros"=>count($this->eve->buscar($buscar)),
    "cantidad"=>$cantidad);
    echo json_encode($data);
  }

  public function viewregistrar($id = 0){
  	$data['persona']=$this->usu->listarDatosPersona($this->session->userdata('usuario'));

    $this->load->view('admin/guest/header');
    $this->load->view('admin/guest/nav',$data);
	  $this->load->view('admin/eventos/registro',array('model'=> $id > 0 ? $this->eve->Obtener($id) : null));
    $this->load->view('admin/guest/footer');
  }
}