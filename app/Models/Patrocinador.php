<?php
namespace App\Models;


class Patrocinador extends BaseElement{
    public function __construct($titulo,$descripcion,$imagen){
        $this->imagen = $imagen;
        $this->description = $descripcion;
        $this->titulo = $titulo;
    }

    public function getDurationAsString(){
        $years = floor($this->months/12);
        $extraMonths = $this->months % 12;
        if($years == 0){
            return "Desde hace $extraMonths mes";
        }else{
            return "Desde hace $years año $extraMonths meses";
        }
    }
    

}