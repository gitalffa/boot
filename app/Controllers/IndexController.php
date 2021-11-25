<?php

namespace App\Controllers;
use App\Models\{Rodada,Patrocinador};

class IndexController extends BaseController{
    public function indexAction(){
        $limitMonths = 10;
        $rodadas = Rodada::all();
        $patrocinadores = Patrocinador::all();
        return $this->renderHTML('index.twig',[
            'rodadas' => $rodadas,
            'patrocinadores' => $patrocinadores
        ]);
    }
}