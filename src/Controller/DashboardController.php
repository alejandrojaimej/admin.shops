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
        $id = $security->checkLogged($lang, 'dashboard');
        $resp = $api->request('adminText/'.$lang.'/dashboard/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];
        
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'Dashboard',
            'function_name' => 'index',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'profile_id' => null,
            'text' => $resp['texts'],
            'user' => $resp['user']
        ]);
    }
}
