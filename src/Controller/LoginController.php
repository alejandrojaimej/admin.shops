<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use Symfony\Component\HttpFoundation\Session\Session;


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

        //obtener idioma y textos del login
        $lang = $locale = $request->getLocale();


        if(isset($_POST) && !empty($_POST)){
            $email = $_POST['email'];
            $password = $_POST['pass'];
            //Llamada a la api para comprobar el usuario y contraseña
            $resp = $api->request('login', 'POST', array('email'=>$_POST['email'],'password'=>$_POST['pass']));
            $resp = json_decode($resp, true);
            
            $session = new Session();
            if($this->container->get('session')->isStarted() === false){
                $session->start();
            }
           
            if($resp['response']!==false && is_numeric($resp['response'])){
                //redireccion al [index de la admin || página en referer]
                $session->set('user_id', $resp['response']);
                if($session->get('referer') == null || empty($session->get('referer')) ){
                    header('Location: /'.$lang.'/dashboard');exit;
                }else{
                    header('Location: /'.$lang.'/'.$session->get('referer'));exit;
                }
            }else{
                $session->remove('user_id');
                $errorText = true;
            }
        }

        
        $resp = $api->getText('login', $lang);
        $resp = json_decode($resp, true);
        //pintar la view del login
        if($resp['error'] === false){
            $texts = $resp['response'];
            return $this->render('login/index.html.twig', [
                'controller_name' => 'LoginController',
                'lang'=>$lang,
                'alternate' => [
                    'es' => 'https://admin.mk1.es/',
                    'en' => 'https://admin.mk1.es/en',
                    'zh' => 'https://admin.mk1.es/zh'
                ],
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
