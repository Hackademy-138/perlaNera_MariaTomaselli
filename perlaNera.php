<?php
abstract class Poppa{
              abstract public function move();
}

abstract class Prua{
              abstract public function attack();
}

class Remi extends Poppa{
              public function move(){
                            echo"Remate ragazzi kraken \n";
              }   
}

class Vele extends Poppa{
              public function move(){
                            echo"Spiegate le vele \n";
              }
}

class Timone extends Poppa{
              public function move(){
                            echo"Tutta a dritta \n";
              }
}


class Arrembaggio extends Prua{
              public function attack(){
                            echo"Tutti all'arrembaggio \n";
              }
}

class Cannoni extends Prua{
              public function attack(){
                            echo"Ti affondo \n";
              }
}

class  Pistole extends Prua{
              public function attack(){
                            echo"Sparate tutti ai nemici \n";
              }
}

class PerlaNera{
              public $poppa;
              public $prua;

              public function __construct(Poppa $po, Prua $pr)
              {
                            $this->poppa=$po;
                            $this->prua=$pr;
              }

              public function movimento(){
                            $this->poppa->move();
              }

              public function attacco(){
                            $this->prua->attack();
              }
}

$perlaNera= new PerlaNera(new Timone, new Pistole);
print_r($perlaNera);
$perlaNera->movimento();
$perlaNera->attacco();