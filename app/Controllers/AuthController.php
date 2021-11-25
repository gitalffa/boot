<?php
namespace App\Controllers;
use App\Models\Users;
use Respect\Validation\Validator as v;
use Laminas\Diactoros\Response\RedirectResponse;


class AuthController extends BaseController{
    public function getLogin($request){
       
        return $this->renderHTML('login.twig');
    }

    public function postLogin($request){
        $postData=$request->getParsedBody();
        $responseMessage=null;
        $user = Users::where('user',$postData['email'])->first();
        if ($user){
            if(password_verify($postData['password'],$user->password)){
                $_SESSION['userId'] = $user->id;
                return new RedirectResponse('/boot/admin');
            }else{
                $responseMessage = "Bad credentials";
            }
        }else{
            $responseMessage = "Bad credentials";
        }

        return $this->renderHTML('login.twig',[
            'responseMessage'=>$responseMessage
        ]);
    }
    public function getLogout($request){
        unset($_SESSION['userId']);
        return new RedirectResponse('/boot/login');
    }
}