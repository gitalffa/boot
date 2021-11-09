<?php

namespace App\Controllers;
use App\Models\{Rodada,Patrocinador};

class IndexController{
    public function indexAction(){
        $limitMonths = 10;
        $rodadas = Rodada::all();
        $patrocinadores = Patrocinador::all();
        include '../views/index.php';
    }
}