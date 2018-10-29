<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route({
     *     "es": "/",
     *     "en": "/login",
     *     "es": "/acceder"
     * }, name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            'section_title' => 'Login',
            'styles' => ['login.css'],
            'scripts' => ['shell.js']
        ]);
    }
}
