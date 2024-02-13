<?php
abstract class ArtoSupeDx{
              abstract public function attack();
}

abstract class ArtoSupSx{
              abstract public function defence();
}

abstract class ArtiInf{
              abstract public function move();
}

class Lanciamissili extends ArtoSupeDx{
              public function attack(){
                            echo"Muori mostro dei miei stivali\n";
              }   
}

class Laser extends ArtoSupeDx{
              public function attack(){
                            echo"Ti riduco ad un colabrodo \n";
              }
}

class PugnoVolante extends ArtoSupeDx{
              public function attack(){
                            echo"Ti prendo a cazzotti da casa mia \n";
              }
}


class Ruote extends ArtoSupSx{
              public function defence(){
                            echo"Mamma guarda come sono veloce\n";
              }
}

class Scudo extends ArtoSupSx{
              public function defence(){
                            echo"Non mi fai niente \n";
              }
}


class Barriera extends ArtoSupSx{
              public function defence(){
                            echo"Se tocchi la barriera ti riduci come una zanzara \n";
              }
}


class  Ondadurto extends ArtoSupSx{
              public function defence(){
                            echo"Ti esplodo \n";
              }
}


class Cavallo extends ArtiInf{
              public function move(){
                            echo"Cavalco verso l'infinito \n";
              }
}


class Razzo extends ArtiInf{
              public function move(){
                            echo"Volo verso il sole\n";
              }
}


class  Piedi extends ArtiInf{
              public function move(){
                            echo"La benzina costa, meglio se vado a piedi \n";
              }
}


class JeegRobot{
              public $ArtoSupeDx;
              public $ArtoSupSx;
              public $Artiinf;



              public function __construct(ArtoSupeDx $dx, ArtoSupSx $sx, ArtiInf $i)
              {
                            $this->ArtoSupeDx=$dx;
                            $this->ArtoSupSx=$sx;
                            $this->Artiinf=$i;
              }

              public function attacco(){
                            $this->ArtoSupeDx->attack();
              }

              public function difesa(){
                            $this->ArtoSupSx->defence();
              }

              public function movimento(){
                            $this->Artiinf->move();
              }
}

$jeegrob= new JeegRobot(new Laser, new Ruote, new Cavallo);
print_r($jeegrob);
$jeegrob->movimento();
$jeegrob->attacco();
$jeegrob->difesa();