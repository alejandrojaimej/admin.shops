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
        if(isset($_POST) && !empty($_POST)){
            //Llamada a la api para comprobar el usuario y contraseña (la contraseña se manda encriptada)
            $hash = hash("sha512", rand(), true);
            $password_hash = password_hash($_POST['pass'], $hash);
            $resp = $api->request('login', 'POST', array('email'=>$_POST['email'],'password'=>$_POST['pass']));
            
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
                'styles' => ['login.css'],
                'scripts' => ['shell.js']
            ]);
        }
    }
}
