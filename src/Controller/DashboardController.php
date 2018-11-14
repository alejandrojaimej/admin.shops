<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use App\Utils\Security;


class DashboardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $security->checkLogged($lang, 'dashboard');


        $resp = $api->getText('dashboard', $lang);
        $resp = json_decode($resp, true);
        $texts = $resp['response'];
        //dump($texts);exit;
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Dashboard',
            'function_name' => 'index',
            'lang'=>$lang,
            'text' => $texts,
        ]);
    }
}
