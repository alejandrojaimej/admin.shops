<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use App\Utils\Security;
use App\Utils\Paypal;

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
            'scripts'=>['../bootstrap/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js','../bootstrap/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js', '../bootstrap/global/plugins/bootstrap-modal/js/bootstrap-modal.js','shop.js']
        ]);
    }

    /**
     * CARRITO
     */
    public function cart(Request $request, Api $api, Security $security, Paypal $paypal){
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

        //obtener los productos en el carrito del usuario
        $cart = $api->request('getCart/'.$lang.'/'.$id, 'GET', array('lang'=>$lang, 'userId'=>$id));
        $cart = json_decode($cart, true);
        $cart = $cart['response'];

        foreach($cart as $item){
            $paypal->addItem($item['title'], $item['quantity'], number_format($item['price'], 2, '.', ''), strip_tags($item['description']));
        }
        
        $url_paypal = $paypal->makePayment();

        return $this->render('shop/cart.html.twig', [
            'controller_name' => 'Shop',
            'function_name' => 'cart',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'cart'=>$cart,
            'url_paypal' => $url_paypal,
            'scripts'=>['shop.js', 'cart.js']
        ]);

    }

    public function addToCart(Request $request, Api $api, Security $security){
        if(!isset($_POST) || empty($_POST) ){echo 'false';exit;}
        $product_id = (int)$_POST['product_id'];        

        //idioma
        $lang = $locale = $request->getLocale();
        //posicion del usuario en la web e id de usuario
        $id = $security->checkLogged($lang, 'shop');
        //obtener textos de la seccion
        $resp = $api->request('adminText/'.$lang.'/shop/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        //obtener los productos en el carrito del usuario
        $cart = $api->request('getCart/'.$lang.'/'.$id, 'GET', array('lang'=>$lang, 'userId'=>$id));
        $cart = json_decode($cart, true);
        $cart = $cart['response'];

        foreach($cart as $key => $value){
            unset($value['image']);
            unset($value['price']);
            unset($value['title']);
            unset($value['subtitle']);
            unset($value['description']);
            $cart[$key] = $value;
            $cart[$key]['quantity'] = (int)$cart[$key]['quantity'];
        }
        
        
        if(array_key_exists($product_id, $cart)){
            $cart[$product_id]['quantity']++;
        }else{
            $product = array();
            $product['product_id'] = $product_id;
            $product['quantity'] = 1;
            $product['date_added'] = date('Y-m-d H:i:s');
            $cart[$product_id] = $product;
        }

        $res = $api->request('setCart', 'POST', array('userId'=>$id,'products'=>json_encode($cart)));
        echo $cart[$product_id]['quantity'];
        exit;
    }


    public function removeFromCart(Request $request, Api $api, Security $security){
        if(!isset($_POST) || empty($_POST) ){echo 'false';exit;}
        $product_id = (int)$_POST['product_id'];        

        //idioma
        $lang = $locale = $request->getLocale();
        //posicion del usuario en la web e id de usuario
        $id = $security->checkLogged($lang, 'shop');
        //obtener textos de la seccion
        $resp = $api->request('adminText/'.$lang.'/shop/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        //obtener los productos en el carrito del usuario
        $cart = $api->request('getCart/'.$lang.'/'.$id, 'GET', array('lang'=>$lang, 'userId'=>$id));
        $cart = json_decode($cart, true);
        $cart = $cart['response'];

        foreach($cart as $key => $value){
            unset($value['image']);
            unset($value['price']);
            unset($value['title']);
            unset($value['subtitle']);
            unset($value['description']);
            $cart[$key] = $value;
            $cart[$key]['quantity'] = (int)$cart[$key]['quantity'];
        }
        
        
        if(array_key_exists($product_id, $cart)){
            $cart[$product_id]['quantity']--;
            echo $cart[$product_id]['quantity'];
            if($cart[$product_id]['quantity'] == 0){
                unset($cart[$product_id]);
            }
        }

        $res = $api->request('setCart', 'POST', array('userId'=>$id,'products'=>json_encode($cart)));
        exit;
    }

}