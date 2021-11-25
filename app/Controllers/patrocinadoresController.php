<?php

namespace App\Controllers;
use App\Models\Patrocinador;
use Respect\Validation\Validator as v;
use Respect\Validation\DateTime;

class PatrocinadoresController extends BaseController{
    
    public function getAddPatrocinadoresController($request){
        $responseMessageDescripcion = $responseMessageFecha = $responseMessageTitulo = $alertTipoDescripcion = $alertTipoFecha = $alertTipoTitulo = $responseMessageImagen = $alertTipoImagen = null;
        $save = true;
        if($request->getMethod() == 'POST'){
            $postData =$request->getParsedBody();
                $tituloValidator=  v::stringType()->notEmpty();
                $tituloValidator->validate($postData['titulo']);
                try{
                    $tituloValidator->assert($postData['titulo']); // true
                    $responseMessageTitulo="todo bien";
                    $alertTipoTitulo ="alert-primary";
                    }catch(\Exception $e){
                   $responseMessageTitulo = "El titulo no debe ser nulo";
                   $alertTipoTitulo ="alert-danger";
                   $save=false;
                }
                $descripcionValidator = v::stringType()->notEmpty();
                $descripcionValidator->validate($postData['descripcion']);                         
                try{
                    $descripcionValidator->assert($postData['descripcion']); // true
                    $responseMessageDescripcion="todo bien";
                    $alertTipoDescripcion ="alert-primary";
                    }catch(\Exception $e){
                   $responseMessageDescripcion = "La descripcion tiene que ser mayor de 50 caracteres";
                   $alertTipoDescripcion ="alert-danger";
                   $save=false;
                }
                $fechaValidator = v::dateTime()->between('2021-06-01', 'now');
                $fechaValidator->validate($postData['months']);                         
                try{
                    $fechaValidator->assert($postData['months']); // true
                    $responseMessageFecha="todo bien";
                    $alertTipoFecha ="alert-primary";
                    }catch(\Exception $e){
                   $responseMessageFecha = "La fecha tiene que ser valida";
                   $alertTipoFecha ="alert-danger";
                   $save=false;
                }
                $ImagenValidator = v::stringType()->notEmpty();
                $ImagenValidator->validate($postData['imagen']);                         
                try{
                    $ImagenValidator->assert($postData['imagen']); // true
                    $responseMessageImagen="todo bien";
                    $alertTipoImagen ="alert-primary";
                    }catch(\Exception $e){
                   $responseMessageImagen = "La Imagen tiene que ser valida";
                   $alertTipoImagen ="alert-danger";
                   $save=false;
                }

            $patrocinador = new Patrocinador();
            $patrocinador->titulo =$_POST['titulo'];
            $patrocinador->descripcion=$_POST['descripcion'];
            $patrocinador->months=$_POST['months'];
            $patrocinador->imagen=$_POST['imagen'];
            
            $patrocinador->save();
        }
        return $this->renderHTML('addPatrocinador.twig',[
            'responseMessageDescripcion'=>$responseMessageDescripcion,
            'responseMessageFecha'=>$responseMessageFecha,
            'responseMessageTitulo'=>$responseMessageTitulo,
            'responseMessageImagen'=>$responseMessageImagen,
            'alertTipoTitulo'=>$alertTipoTitulo,
            'alertTipoDescripcion'=>$alertTipoDescripcion,
            'alertTipoFecha'=>$alertTipoFecha,
            'alertTipoImagen'=>$alertTipoImagen
            
        ]);
    }
    
}