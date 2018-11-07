<?php

namespace App\Utils;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class Security extends AbstractController
{
    public function checkLogged($lang = 'es', $referer = 'dashboard'){
        $session = new Session();
        if($this->container->get('session')->isStarted() === false){
            $session->start();
        }
        $session->set('referer', $referer);
        if($session->get('user_id') == null || !is_numeric($session->get('user_id')) ){
            header('Location: '.($lang == 'es' ? '/' : '/'.$lang));exit;
        }
    }
}