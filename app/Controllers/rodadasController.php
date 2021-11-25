<?php

namespace App\Controllers;
use App\Models\Rodada;
use Respect\Validation\Validator as v;
use Respect\Validation\DateTime;


class RodadasController extends BaseController {
    public function getAddRodadasController($request){
        $responseMessageDescripcion = $responseMessageFecha = $responseMessageTitulo = $alertTipoDescripcion = $alertTipoFecha = $alertTipoTitulo = $responseMessageImagen = $alertTipoImagen= null;
        $save = true;
        if($request->getMethod() == 'POST'){
            
            /* validador */
            $postData =$request->getParsedBody();
            /*$rodadaValidator = v::key('titulo', v::stringType()->notEmpty())
                                ->key('descripcion', v::stringType()->length(50,150))
                                ->key('months',v::dateTime()->between('2021-06-01', 'now'))
                                ->key('conocemas',v::stringType()->Url()); */

                // var_dump($postData);
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
                $descripcionValidator = v::stringType()->length(50,1000);
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

                $files=$request->getUploadedFiles();
                $imagen=$files['imagen'];
                echo $tamaño=$imagen->getSize();
                $extArchivoSubido=substr(strrchr($imagen->getClientMediaType(),"/"),1);
                if($extArchivoSubido=="png"){
                    $responseMessageImagen="todo bien";
                    $alertTipoImagen ="alert-primary";
                    if($imagen->getError() == UPLOAD_ERR_OK){
                        $fileName = $imagen->getClientFilename();
                        $imagenLocation="assets/images/$fileName";
                        $imagen->moveTo($imagenLocation);
                    }
                }else{
                   $responseMessageImagen = "La Imagen no tiene la extencion valida";
                   $alertTipoImagen ="alert-danger";
                   $save=false;
                }
            
            /* fin validador */
            if ($save == true){
                
                $rodada = new Rodada();
                $rodada->titulo =$postData['titulo'];
                $rodada->descripcion=$postData['descripcion'];
                $rodada->months=$postData['months'];
                $rodada->conocemas=$postData['conocemas'];
                $rodada->imagen=$imagenLocation;
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
            
        }
        return $this->renderHTML('addRodada.twig',[
            'responseMessageDescripcion'=>$responseMessageDescripcion,
            'responseMessageImagen'=>$responseMessageImagen,
            'responseMessageFecha'=>$responseMessageFecha,
            'responseMessageTitulo'=>$responseMessageTitulo,
            'alertTipoTitulo'=>$alertTipoTitulo,
            'alertTipoDescripcion'=>$alertTipoDescripcion,
            'alertTipoFecha'=>$alertTipoFecha,
            'alertTipoImagen'=>$alertTipoImagen
        ]);
    }
}