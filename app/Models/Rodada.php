<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;



class Rodada extends Model{
    protected $table = 'rodadas';

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