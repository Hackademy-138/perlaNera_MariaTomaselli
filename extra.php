<?php
abstract class Salato{
              abstract public function salt();
}

abstract class Dolce{
              abstract public function sweet();
}

class Lasagna extends Salato{
              public function salt(){
                            echo"Se permetti, ne mangerei ancora di questa splendida lasagna\n";
              }   
}

class Parmigiana extends Salato{
              public function salt(){
                            echo"La parmigiana della mamma è sempre la migliore \n";
              }
}

class Frittata extends Salato{
              public function salt(){
                            echo"La frittata è fatta \n";
              }
}


class Tiramisù extends Dolce{
              public function sweet(){
                            echo"Ci sono sfumature a cui non so resistere come quelle del tiramisù\n";
              }
}

class Torta extends Dolce{
              public function sweet(){
                            echo"Che compleanno sarebbe senza una torta \n";
              }
}

class  Cannolo extends Dolce{
              public function sweet(){
                            echo" Il cannolo siciliano con ricotta, cedro e tanti canditi è uno dei miei dolci preferiti. \n";
              }
}

class Cibo{
              public $salato;

              public $dolcetto;

              public function __construct(Salato $s, Dolce $d)
              {
                            $this->salato=$s;
                            $this->dolcetto=$d;
              }

              public function salato(){
                            $this->salato->salt();
              }

              public function dolce(){
                            $this->dolcetto->sweet();
              }
}

$food= new Cibo(new Lasagna, new Tiramisù);
print_r($food);
$food->salato();
$food->dolce();