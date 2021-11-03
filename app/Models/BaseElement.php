<?php
namespace App\Models;



/* calse base para las rodadas */
class BaseElement implements Printable {
    private $titulo;
    public $description;
    public $months;
    

    public function __construct($titulo,$description){
        $this->setTitulo($titulo);
        $this->descripcion = $description;
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

    public function getDescription(){
        return $this->description;
    }
}
/* fin clase base para las rodadas */


