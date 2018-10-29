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
        $lang = $locale = $request->getLocale();
        $resp = $api->getText('login', $lang);
        $resp = json_decode($resp, true);
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
