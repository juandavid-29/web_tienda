<?php
class Registro extends CI_Controller
{
        public function index()
        {
                $this->load->view('header');
                $this->load->view('registro');
                $this->load->view('footer');
                echo base_url();
        }
        public function addweb_tienda()
        {
                $webNombre = $this->input->post('nombre');
                $webApellido = $this->input->post('apellido');
                $webDocumento = $this->input->post('documento');
                $webContraseña = $this->input->post('contraseña');

                $tienda = array('nombre' => $webNombre, 'apellido' => $webApellido, 
                'documento' => $webDocumento, 'contraseña' => $webContraseña,);

                $this->Web_Model->addweb_tienda($tienda);
                $this->load->view('header');
                $this->load->view('registro');
                $this->load->view('footer');
        }
}
        //public function updateweb_tienda()
        //{ $this->Web_Model->updateweb_tienda()}

        //public function listweb_tiendas(){
                //$web_tiendas = $this->Web_Model->listweb_tiendas();
                //print_r($web_tiendas);
                //foreach($web_tiendas as $registro){
                        //print("nombre: " . $registro->nombre . "  apellido: " . $registro->apellido  . '<br>');} }

        //public function deleteweb_tienda(){
               // $this->Web_Model->deleteweb_tienda();}
