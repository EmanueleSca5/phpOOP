<?php

class Company{
    public $name;
    public $location;
    public $tot_employes = 0;

    public static $stipendioDipendenti = 1500;
    public static $totalCost = 0;

    public function calculatorAnnualCost($int = 12){
        return $this->tot_employes * (self::$stipendioDipendenti * $int);
    }

    public function printCalculatedAnnualCost(){
        echo "L azienda $this->name ha un costo annuale di " . $this->calculatorAnnualCost() . " euro \n";
    }

    

    public function __construct($_name, $_location, $_tot_employes){
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employes = $_tot_employes;

        self::$totalCost += $this->calculatorAnnualCost();
    }

    public function checkEmployees($x, $y){
        if($x > $y){
            return true;
        }
        return false;
    }

    public function printEmployes($num = 0){
        if($this->checkEmployees($this->tot_emmployes, $num)){

            echo "L azienda $this->name ha in totale $this->tot_employes dipendenti \n";
        }else{
            echo "L azienda $this->name non ha dipendenti \n";
        }
    }

    public static function totalCompanyAnnualCost(){
        return self::$totalCost;
    }

    

}

$aziende = [

    $aulab = new Company("Aulab", "Bari", 50),
    $apple = new Company("Apple", "NewYork", 1890),
    $bershka = new Company("Bershka", "Rovigo", 678),
    $burger = new Company("BurgerKing", "Las vegas", 13400),
    $mrvape = new Company("Mrvape", "Codogno", 778),
    
    ];

    foreach($aziende as $azienda){
        $azienda->printCalculatedAnnualCost();
    }
    
      print("La compagnia ha un costo totale di " . Company::totalCompanyAnnualCost() . " euro");  