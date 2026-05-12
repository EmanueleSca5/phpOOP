<?php

class Car {
  private $num_telaio;

  public function __construct(){
    $this->num_telaio = 2345;
  }

  protected function getTelaio(){
    return $this->num_telaio;
  }

}

class Fiat extends Car {
  protected $license;
  protected $name;

  private $psw = 696969;

  public function __construct(){
    parent::__construct();
    $this->license = "56790OPJ \n";
    $this->name = "Ferrari";
  }

  private function carDetails(){
    return "La mia macchina è una $this->name con targa $this->license e numero telaio " . $this->getTelaio();
  }

  public function accessToCarDetails($key){
        if($key === $this->psw){
            return $this->carDetails();
        }else{
            return "Non hai l accesso per accedere ai dati della macchina \n";
        }
  }
}

$fiat = new Fiat();

print_r($fiat->accessToCarDetails(696969));