<?php
abstract class Casco{
              abstract public function Jarvis();
}

abstract class ArtoDx{
              abstract public function GuantoDx();
}

abstract class ArtoSx{
              abstract public function GuantoSx();
}

abstract class Corpo{
              abstract public function Armatura();
}

abstract class Artiinf{
              abstract public function Move();
}






class Mappa extends Casco{
              public function Jarvis(){
                            echo"Jarvis dammi la mappa dell'Italia\n";
              }   
}

class Auto extends Casco{
              public function Jarvis(){
                            echo"Jarvis chiama Spiderman \n";
              }
}


class GuantoInfinito extends ArtoDx{
              public function GuantoDx(){
                            echo"I'm Ironman\n";
              }
}

class Laser extends ArtoDx{
              public function GuantoDx(){
                            echo"Tzummm \n";
              }
}


class RobotSpia extends ArtoSx{
              public function GuantoSx(){
                            echo"Vai e torna indietro con le info \n";
              }
}


class Rum extends ArtoSx{
              public function GuantoSx(){
                            echo"Un bicchierino dopo tanta fatica mi ci vuole proprio\n";
              }
}


class  Reattore extends Corpo{
              public function Armatura(){
                            echo"Se mi fermo sono fregato \n";
              }
}
class  Alette extends Corpo{
              public function Armatura(){
                            echo"Mi domando sempre se servano a qualcosa\n";
              }
}


class  Piedi extends Artiinf{
              public function Move(){
                            echo"Voloooo \n";
              }
}
class  Rolley extends Artiinf{
              public function Move(){
                            echo"è il mio gadget preferito \n";
              }
}


class Ironman{
              public $Head;
              public $Right;
              public $Left;
              public $Body;
              public $Inferior;



              public function __construct(Casco $h, ArtoDx $r, ArtoSx $l, Corpo $b, Artiinf $i)
              {
                            $this-> Head= $h;
                            $this-> Right= $r;
                            $this-> Left=$l;
                            $this-> Body=$b;
                            $this-> Inferior=$i;
              }

              public function attacco(){
                            $this->Head->Jarvis();
              }  
              public function destro(){
                            $this->Right->GuantoDx();
              }  
              public function sinistro(){
                            $this->Left->GuantoSx();
              }  
              public function arma(){
                            $this->Body->Armatura();
              }  
              public function movimento(){
                            $this->Inferior->Move();
              }
}

$ironman= new Ironman(new Mappa, new Laser, new Rum, new Alette, new Rolley);
print_r($ironman);
$ironman->attacco();
$ironman->destro();
$ironman->sinistro();
$ironman->arma();
$ironman->movimento();