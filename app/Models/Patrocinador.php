<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Patrocinador extends Model{
    protected $table = 'patrocinadores';
    

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