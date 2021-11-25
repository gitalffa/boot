<?php
namespace App\Controllers;
use App\Models\Users;
use Respect\Validation\Validator as v;


class UsersController extends BaseController{
    public function getAddUsersController($request){
        $responseMessageUser = $alertTipoUser = $responseMessagePasswordNoWhite = $alertTipoPasswordNoWhite = NULL;
        $save=true;
        if($request->getMethod()=='POST'){
            
             $postData=$request->getParsedBody();
           $userValidator=v::stringType()->notEmpty()->email();
            $userValidator->validate($postData['user']);
            try{
                $userValidator->assert($postData['user']);
                $responseMessageUser="todo bien";
                $alertTipoUser ="alert-primary";

            }catch(\Exception $e){
                $responseMessageUser = "Debes poner un correo valido";
                $alertTipoUser ="alert-danger";
                $save=false;
            } 
            $passwordValidator=v::stringType()->notEmpty()->noWhitespace();
            $passwordValidator->validate($postData['password']);
            try{
                $passwordValidator->assert($postData['password']);
                $responseMessagePasswordNoWhite="todo bien";
                $alertTipoPassword ="alert-primary";
            }catch(\Exception $e){
                $responseMessagePasswordNoWhite = "el password no debe tener espacios en blanco";
                $alertTipoPasswordNoWhite ="alert-danger";
                $save=false;
            }
            $passwordConfValidator= v::equals($postData['password']);
            $passwordConfValidator->validate($postData['passwordConf']);
            try{
                $passwordConfValidator->assert($postData['passwordConf']);
                $responseMessagePasswordNoWhite="todo bien";
                $alertTipoPasswordNoWhite ="alert-primary";
            }catch(\exception $e){
                $responseMessagePasswordNoWhite = "Las contraseñas no coinciden";
                $alertTipoPasswordNoWhite ="alert-danger";
                $save=false;
            }

            if ($save == true ){
                if(!empty($_POST)){
                    $users = new Users();
                    $users->user = $postData['user'];
                    $users->password = password_hash($postData['password'],PASSWORD_DEFAULT);
                    $users->save();
                }
                
            }

        }
        return $this->renderHTML('addUser.twig',[
            'responseMessageUser'=>$responseMessageUser,
            'alertTipoUser'=>$alertTipoUser,
            'responseMessagePasswordNoWhite'=>$responseMessagePasswordNoWhite,
            'alertTipoPasswordNoWhite'=>$alertTipoPasswordNoWhite
            
        ]);
    }
}