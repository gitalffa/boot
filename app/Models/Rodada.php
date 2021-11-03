<?php
namespace App\Models;




class Rodada extends BaseElement{
    public $conocemas;
    public $imagen;
    public $abbr;
    public $tituloabbr;
    public $visible;
    

    public function getDurationAsString(){
        $years = floor($this->months/12);
        $extraMonths = $this->months % 12;
        if($years == 0){
            return "$extraMonths months";
        }else{
            return "$years years $extraMonths months";
        }
    }

    

}