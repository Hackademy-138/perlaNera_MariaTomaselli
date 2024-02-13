<?php
abstract class ParteAnteriore{
              abstract public function attack();
}

abstract class PartePosteriore{
              abstract public function move();
}

class Mitraglietta extends ParteAnteriore{
              public function attack(){
                            echo"Ti riduco ad un colabrodo\n";
              }   
}

class LanciaFiamme extends ParteAnteriore{
              public function attack(){
                            echo"Ancora 5 minuti che sei a media cottura \n";
              }
}

class Sparapipistrelli extends ParteAnteriore{
              public function attack(){
                            echo"Vola basso e stai attento \n";
              }
}


class Ruote extends PartePosteriore{
              public function move(){
                            echo"Mamma guarda come sono veloce\n";
              }
}

class Rampino extends PartePosteriore{
              public function move(){
                            echo"Posso driftare sui muri \n";
              }
}

class  Razzo extends PartePosteriore{
              public function move(){
                            echo"Sono un razzo missile \n";
              }
}

class Batmobile{
              public $ParteAnteriore
;
              public $PartePosteriore;

              public function __construct(ParteAnteriore $po, PartePosteriore $pr)
              {
                            $this->ParteAnteriore
              =$po;
                            $this->PartePosteriore=$pr;
              }

              public function attacco(){
                            $this->ParteAnteriore->attack();
              }

              public function movimento(){
                            $this->PartePosteriore->move();
              }
}

$batMobile= new Batmobile(new Mitraglietta, new Razzo);
print_r($batMobile);
$batMobile->movimento();
$batMobile->attacco();