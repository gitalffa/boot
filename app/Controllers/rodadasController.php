<?php

namespace App\Controllers;
use App\Models\Rodada;

class RodadasController{
    public function getAddRodadasController($request){
        
        if($request->getMethod() == 'POST'){
            $postData =$request->getParsedBody();
            $rodada = new Rodada();
            $rodada->titulo =$postData['titulo'];
            $rodada->descripcion=$postData['descripcion'];
            $rodada->months=$postData['months'];
            $rodada->conocemas=$postData['conocemas'];
            $rodada->imagen=$postData['imagen'];
            $rodada->abbr=$postData['abbr'];
            $rodada->tituloabbr=$postData['tituloabbr'];
            $rodada->visible=$postData['visible'];
        
        
            if($postData['visible']=="true"){
                $rodada->visible=true;
            }else{
                $rodada->visible=0;
            }
            
            $rodada->save();
        }
        include '../views/addRodada.php';
    }
}