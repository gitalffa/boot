<?php

/* calse base para las rodadas */
class BaseElementRodada {
    private $titulo;
    public $conocemas;
    public $imagen;
    public $abbr;
    public $tituloabbr;
    public $description;
    public $visible;
    public $months;

    public function __construct($titulo,$conocemas){
        $this->setTitulo($titulo);
        $this->conocemas = $conocemas;
    }

    public function setTitulo($titulo){
        if ($titulo ==""){
            $this->titulo="Nimodo";
        }else{
            $this->titulo = $titulo;
        }
        
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getDurationAsString(){
        $years = floor($this->months/12);
        $extraMonths = $this->months % 12;
        return "$years years $extraMonths months";
    }
}
/* fin clase base para las rodadas */

/* clase base para los patrocinadores */

class BaseElementPatrocinador{
    public $imagen;

    public function __construct($imagen){
        $this->imagen = $imagen;
    }
}
/* fin clase base para los patrocinadores */