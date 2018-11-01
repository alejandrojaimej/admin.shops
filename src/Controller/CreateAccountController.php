<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;

class CreateAccountController extends AbstractController
{
    /**
     * @Route("/es/create/account", name="create_account")
     */
    public function index(Request $request, Api $api)
    {
        $errorText = false;
        $email = '';
        $password = '';
        $rpassword = '';
        $accept = false;
        //obtener idioma y textos del login
        $lang = $locale = $request->getLocale();
        $resp = $api->getText('create_account', $lang);
        $resp = json_decode($resp, true);
        //pintar la view del login
        if($resp['error'] === false){
            $texts = $resp['response'];
        
            if(isset($_POST) && !empty($_POST)){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $rpassword = $_POST['rpassword'];
                $accept = true;
                if( isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['rpassword']) && !empty($_POST['rpassword']) ){
                    if(!isset($_POST['tnc']) || empty($_POST['tnc'])){
                        //debe aceptar los terminos del servicio y la política de privacidad
                        $errorText = true;
                        $texts['error_message'] = $texts['accept_error'].' '.$texts['terms_of_service'].' & '.$texts['privacy_policy'];
                        $accept = false;
                    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                        //el email no es válido
                        $errorText = true;
                        $texts['error_message'] = $texts['email_error'];
                    }else if($_POST['password'] != $_POST['rpassword']){
                        //las contraseñas no coinciden
                        $errorText = true;
                        $texts['error_message'] = $texts['pasword_error'];
                    }else{
                        //todo está bien, enviar al servidor
                        //encriptar la pass antes de enviarla al servidor
                        
                        $resp = $api->request('registerUser', 'PUT', array('email'=>$_POST['email'], 'password'=>$_POST['password']));
                        $resp = json_decode($resp, true);
                        dump($resp);
                        if($resp['response'] === false){
                            $errorText = true;
                            $texts['error_message'] = $texts['insert_error'];
                        }else{
                            //iniciar sesion como el usuario
                            //redireccionar a la admin
                        }
                    }
                }else{
                    //rellene todos los campos
                    $errorText = true;
                    $texts['error_message'] = $texts['fields_error'];                    
                }
            }
        
        
        
            return $this->render('create_account/index.html.twig', [
                'controller_name' => 'CreateAccountController',
                    'lang'=>$lang,
                    'text' => $texts,
                    'errorText' => $errorText,
                    'email' => $email,
                    'password' => $password,
                    'rpassword' => $rpassword,
                    'accept' => $accept
            ]);
        }
    }
}
