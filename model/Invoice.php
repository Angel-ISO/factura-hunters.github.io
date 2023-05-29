<?php
class Invoice  {
    private $number;
    private $date;
    private $products;
    private $total;

    private $taxes;

    public function __construct($number, $date, $products, $taxes) {
        $this->number = $number;
        $this->date = $date;
        $this->products = $products;
        $this->taxes = $taxes;
        $this->total = $this->calcularTotal();
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->products as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }

    public function getNumero() {
        return $this->number;
    }

    public function setNumero($number) {
        $this->number = $number;
    }

    public function getFecha() {
        return $this->date;
    }

    public function setFecha($date) {
        $this->date = $date;
    }

    public function getProductos() {
        return $this->products;
    }

    public function setProductos($products) {
        $this->products = $products;
        $this->total = $this->calcularTotal();
    }

    public function getTotal() {
        return $this->total;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
    public function getTotais() {
        return $this->taxes;
    }
    public function setTotais($taxes) {
        $this->taxes = $taxes;
    }  



}




?>