<?php 
class Client extends Invoice {
    private $nombre;
    private $direccion;
    private $contacto;
    private $invoices=[];

    public function __construct($nombre, $direccion, $contacto) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->contacto = $contacto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getContacto() {
        return $this->contacto;
    }

    public function setContacto($contacto) {
        $this->contacto = $contacto;
    }
}



?>