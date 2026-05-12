<?php

class Vertebrates{

    public function __construct(){
        $this->vertebrati();
    }

    protected function vertebrati(){
        echo "Sono un animale vertebrato \n";
    }
}

class WarmBlooded extends Vertebrates{
      public function __construct(){
        parent::__construct();
        $this->warmBlodeed();
    }

    protected function warmBlodeed(){
        echo "Sono un animale a sangue caldo \n";
    }
}

class ColdBlooded extends Vertebrates{
    public function __construct(){
        parent::__construct();
        $this->coldBlodeed();
    }


    protected function coldBlodeed(){
        echo "Sono un animale a sangue freddo \n";
    }
}

class Fish extends ColdBlooded{
        public function __construct(){
        parent::__construct();
        $this->fish();
    }


    protected function fish(){
        echo "SPLASH!!! \n";
    }

 
}

class Reptiles extends ColdBlooded{
            public function __construct(){
        parent::__construct();
        $this->rettile();
    }


    protected function rettile(){
        echo "Sono un rettile!!! \n";
    }
}

class Amphibians extends ColdBlooded{
            public function __construct(){
        parent::__construct();
        $this->anfibi();
    }

    protected function anfibi(){
        echo "Sono un anfibio!!! \n";
    }
}

class Mammals extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->mammiferi();
    }

    protected function mammiferi(){
        echo "Sono un mammifero!! \n";
    }
}

class Birds extends WarmBlooded{
    public function __construct(){
        parent::__construct();
        $this->birds();
    }

    protected function birds(){
        echo "Sono un uccello!! \n";
    }
}


$makicarp = new Fish();
$leone = new Mammals();