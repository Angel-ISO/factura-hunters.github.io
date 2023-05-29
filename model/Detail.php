<?php 

class Detail{

   private $idDetail;
   
   private $number;

   private $idProduct;

   private $amount;

   private $price;

   public function __construct( $idDetail, $number, $amount, $price ){
       $this->idDetail = $idDetail;
       $this->number = $number;
       $this->amount = $amount;
       $this->price = $price;
   }

   public function getIdDetail(){
       return $this->idDetail;
   }

   public function getNumber(){
       return $this->number;
   }
   
   public function getAmount(){
       return $this->amount;
   }

   public function getPrice(){
       return $this->price;
   }

   public function setIdProduct($idProduct){
       $this->idProduct = $idProduct;
   }

  
   public function setAmount($amount){
       $this->amount = $amount;
   }

   public function setPrice($price){
       $this->price = $price;
   }

   public function getIdProduct(){
       return $this->idProduct;
   }

}


?>