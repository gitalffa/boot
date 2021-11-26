<?php

namespace App\Controllers;
use App\Models\{Job,Project};

class BlogController extends BaseController{
    public function blogAction(){
       
        
        $jobs = Job::all();
        $projects = Project::all();
        
        $lastName='Galindo Copado';
        $name = "Fabricio $lastName";
        $limitMonths = 2000;

        //include '../views/index.php';
        return $this->renderHTML('blog.twig',[
            'name'=>$name,
            'jobs'=>$jobs,
            'prjects'=>$projects
        ]);
        
    }
}