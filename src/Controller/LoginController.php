<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;

class LoginController extends AbstractController
{
    /**
     * @Route({
     *     "es": "/",
     *     "en": "/en",
     *     "zh": "/zh",
     * }, name="login")
     */
    public function index(Request $request, Api $api)
    {
        $email = '';
        $password = '';
        $errorText = false;
        if(isset($_POST) && !empty($_POST)){
            $email = $_POST['email'];
            $password = $_POST['pass'];
            //Llamada a la api para comprobar el usuario y contraseña
            $resp = $api->request('login', 'POST', array('email'=>$_POST['email'],'password'=>$_POST['pass']));
            $resp = json_decode($resp, true);
            dump($resp);
            if($resp['response']!==false && is_numeric($resp['response'])){
                //redireccion al index de la admin
            }else{
                $errorText = true;
            }
        }

        //obtener idioma y textos del login
        $lang = $locale = $request->getLocale();
        $resp = $api->getText('login', $lang);
        $resp = json_decode($resp, true);

        //pintar la view del login
        if($resp['error'] === false){
            $texts = $resp['response'];
            return $this->render('login/index.html.twig', [
                'controller_name' => 'LoginController',
                'lang'=>$lang,
                'text' => $texts,
                'email' => $email,
                'password' => $password,
                'errorText' => $errorText,
                'styles' => ['login.css'],
                'scripts' => ['shell.js']
            ]);
        }
    }
}
