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
        //obtener idioma y textos del login
        $lang = $locale = $request->getLocale();
        $resp = $api->getText('create_account', $lang);
        $resp = json_decode($resp, true);
        //pintar la view del login
        if($resp['error'] === false){
            $texts = $resp['response'];
            return $this->render('create_account/index.html.twig', [
                'controller_name' => 'CreateAccountController',
                    'lang'=>$lang,
                    'text' => $texts,
                    'errorText' => $errorText,
            ]);
        }
    }
}
