<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Utils\Api;

class LoginController extends AbstractController
{
    /**
     * @Route({
     *     "es": "/",
     *     "en": "/login",
     *     "es": "/acceder"
     * }, name="login")
     */
    public function index(Api $api)
    {
        $texto = $api->getText('login', 'es');
        var_dump($texto);
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'section_title' => 'Login',
            'styles' => ['login.css'],
            'scripts' => ['shell.js']
        ]);
    }
}
