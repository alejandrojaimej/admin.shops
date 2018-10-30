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
        $errorText = false;
        if(isset($_POST) && !empty($_POST)){
            //Llamada a la api para comprobar el usuario y contraseña (la contraseña se manda encriptada)
            $hash = hash("sha512", rand(), true);
            //$password_hash = password_hash($_POST['pass'], $hash);
            $resp = $api->request('login', 'POST', array('email'=>$_POST['email'],'password'=>$_POST['pass']));
            $resp = json_decode($resp, true);
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
                'errorText' => $errorText,
                'styles' => ['login.css'],
                'scripts' => ['shell.js']
            ]);
        }
    }
}
