<?php 

class Product {
    private $idProduct;
    private $name;
    private $description;
    private $price;
    private $stock;

    public function __construct($name, $description, $price, $stock, $idProduct) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->stock = $stock;
        $this->idProduct = $idProduct;
    }

    public function getNombre() {
        return $this->name;
    }

    public function setNombre($name) {
        $this->name = $name;
    }

    public function getDescripcion() {
        return $this->description;
    }

    public function setDescripcion($description) {
        $this->description = $description;
    }

    public function getPrecio() {
        return $this->price;
    }

    public function setPrecio($price) {
        $this->price = $price;
    }

    public function getCantidadStock() {
        return $this->stock;
    }

    public function setCantidadStock($stock) {
        $this->stock = $stock;
    }

    public function getIdProduct() {
        return $this->idProduct;
    }
    public function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }
}     
                                            



?>

