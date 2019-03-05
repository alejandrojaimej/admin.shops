<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use App\Utils\Security;

/**
 * CONTROLADOR DE LA TIENDA
 */
class ShopController extends AbstractController
{
    /**
     * PAGINA PRINCIPAL
     */
    public function home($profile_id = null, Request $request, Api $api, Security $security)
    {

        /*
            MIRAR ESTE CODIGO PARA EL CAMBIO DE DIVISAS
            https://gist.github.com/nomisoft/11403284
        */




        //idioma
        $lang = $locale = $request->getLocale();
        //posicion del usuario en la web e id de usuario
        $id = $security->checkLogged($lang, 'shop');
        //obtener textos de la seccion
        $resp = $api->request('adminText/'.$lang.'/shop/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];
        //perfiles de usuario para el sidebar
        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];

        $pd = $api->request('getAllProducts/'.$lang, 'GET', array('lang'=>$lang));
        $pd = json_decode($pd, true);
        $products = $pd['response'];
        dump($products);

        return $this->render('shop/home.html.twig', [
            'controller_name' => 'Shop',
            'function_name' => 'home',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'profile_id' => $profile_id,
            'products' => $products,
            'styles'=>['../bootstrap/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css', '../bootstrap/global/plugins/bootstrap-modal/css/bootstrap-modal.css', '../bootstrap/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css', 'shop/shop.css'],
            'scripts'=>['../bootstrap/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js','../bootstrap/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js', '../bootstrap/global/plugins/bootstrap-modal/js/bootstrap-modal.js']
            /*'styles' => ['../bootstrap/global/plugins/dropzone/dropzone.min.css','profile/gallery.css'],
            'scripts' => ['../bootstrap/global/plugins/dropzone/dropzone.min.js','../bootstrap/global/plugins/jquery-ui/jquery-ui.min.js', 'gallery.js'],*/
        ]);
    }

}