<?php

namespace App\Controllers;
use App\Models\{Rodada,Patrocinador};

class AdminController extends BaseController{
    public function getIndex(){
        
        return $this->renderHTML('admin.twig');
    }
}