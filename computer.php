<?php
abstract class Hardware{
              abstract public function fisico();
}

abstract class Software{
              abstract public function nonfisico();
}


class RAM extends Hardware{
              public function fisico(){
                            echo"immagazzinizzo le informazioni di cui un programma ha bisogno durante l'esecuzione. \n";
              }   
}

class ROM extends Hardware{
              public function fisico(){
                            echo"archivia in maniera permanente le istruzioni del computer \n";
              }
}

class HardDisk extends Hardware{
              public function fisico(){
                            echo"Ti servo per la memorizzazione a lungo termine dei dati nel computer \n";
              }
}


class SistemaOperativo extends Software{
              public function nonfisico(){
                            echo"Collego l'hardware con i programmi \n";
              }
}

class Programma extends Software{
              public function nonfisico(){
                            echo"Posso essere di vario genere, con me potrai elaborare dei testi, riprodurre la musica, navigare per il web e così via. \n";
              }
}


class Computer{
              public $hardw;
              public $softw;

              public function __construct(Hardware $h, Software $s)
              {
                            $this->hardw=$h;
                            $this->softw=$s;
              }

              public function memorizzazione(){
                            $this->hardw->fisico();
              }

              public function collegamenti(){
                            $this->softw->nonfisico();
              }
}

$computer= new Computer(new RAM, new Programma);
print_r($computer);
$computer->memorizzazione();
$computer->collegamenti();