<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class Rodada extends Model{
    protected $table = 'rodadas';

    public function getDurationAsString(){
        
            return "Fecha de la rodada : $this->months";
       
    }

    

}