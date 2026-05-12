<?php

class Continent{
    public $nameContinent;

    public function __construct($continent){
        $this->nameContinent = $continent;
    }

  
}

class Country extends Continent{
    public $nameCountry;

    public function __construct($continent, $country){
        parent::__construct($continent);
        $this->nameCountry = $country;
    }
}

class Regione extends Country{
    public $nameRegione;

     public function __construct($continent, $country, $regione){
        parent::__construct($continent, $country);
        $this->nameRegione = $regione;
    }
}

class Province extends Regione{
    public $nameProvince;

     public function __construct($continent,$country, $regione, $province){
        parent::__construct($continent, $country, $regione);
        $this->nameProvince = $province;
    }
}

class City extends Province{
    public $nameCity;

     public function __construct($continent, $country, $regione, $province, $city){
        parent::__construct($continent, $country, $regione, $province);
        $this->nameCity = $city;
    }
}

class Street extends City{
    public $nameStreet;

     public function __construct($continent, $country, $regione, $province, $city, $street){
        parent::__construct($continent, $country, $regione, $province, $city);
        $this->nameStreet = $street;
    }

     public function getMyCurrentlocation(){
        echo "Mi trovo in $this->nameContinent, $this->nameCountry, $this->nameRegione, $this->nameProvince, $this->nameStreet \n";
    }


}






$mylocation = new Street("Europa", "Italia", "Puglia", "BA", "Bari", "Strada San Giorgio Martire 2D");

$mylocation->getMyCurrentlocation();