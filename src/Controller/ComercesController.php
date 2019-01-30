<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use App\Utils\Security;


class ComercesController extends AbstractController
{
    /**
     * @Route("/comerces", name="comerces")
     */
    public function index(Request $request, Api $api)
    {
        $lang = $locale = $request->getLocale();
        $security->checkLogged($lang, 'comerces');

        $resp = $api->getText('comerces', $lang);
        $resp = json_decode($resp, true);
        $texts = $resp['response'];
        return $this->render('comerces/index.html.twig', [
            'controller_name' => 'Comerces',
            'function_name' => 'index',
            'lang'=>$lang,
            'text' => $texts,
        ]);
    }
    public function edit($comerce = null, Request $request, Api $api, Security $security){
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'comerces/edit');
        $resp = $api->request('adminText/'.$lang.'/comerces/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        return $this->render('comerces/index.html.twig', [
            'controller_name' => 'Comerces',
            'function_name' => 'edit',
            'lang'=>$lang,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'comerces' => $resp['comerces'],
            'comerce_id' => $comerce,
            'section' => 'edit'
        ]);
    }
    public function new(Request $request, Api $api, Security $security){
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'dashboard');
        $resp = $api->getText('comerces', $lang);
        $resp = json_decode($resp, true);
        $texts = $resp['response'];

        return $this->render('comerces/index.html.twig', [
            'controller_name' => 'Comerces',
            'function_name' => 'new',
            'lang'=>$lang,
            'text' => $texts,
        ]);
    }
    public function delete(Request $request, Api $api, Security $security){
        $lang = $locale = $request->getLocale();
        $security->checkLogged($lang, 'comerces/delete');
        $resp = $api->getText('comerces', $lang);
        $resp = json_decode($resp, true);
        $texts = $resp['response'];

        return $this->render('comerces/index.html.twig', [
            'controller_name' => 'Comerces',
            'function_name' => 'delete',
            'lang'=>$lang,
            'text' => $texts,
        ]);
    }

}
