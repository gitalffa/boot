<?php

namespace App\Controllers;
use App\Models\Patrocinador;

class PatrocinadoresController{
    
    public function getAddPatrocinadoresController(){
        if(!empty($_POST)){
            $patrocinador = new Patrocinador();
            $patrocinador->titulo =$_POST['titulo'];
            $patrocinador->descripcion=$_POST['descripcion'];
            $patrocinador->months=$_POST['months'];
            $patrocinador->imagen=$_POST['imagen'];
            
            $patrocinador->save();
        }
        include '../views/addPatrocinador.php';
    }
    
}