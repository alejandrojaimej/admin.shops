<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use App\Utils\Security;


class UserProfileController extends AbstractController
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function gallery($profile_id = null, Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'gallery');
        $resp = $api->request('adminText/'.$lang.'/gallery/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];
        
        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];

        $gallery = $api->request('userGallery/'.$profile_id);
        $gallery = json_decode($gallery, true);
        $galleryImages = $gallery['response'];

        dump($galleryImages);

        return $this->render('user_profile/gallery.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'gallery',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'styles' => ['../bootstrap/global/plugins/dropzone/dropzone.min.css','profile/gallery.css'],
            'scripts' => ['../bootstrap/global/plugins/dropzone/dropzone.min.js','../bootstrap/global/plugins/jquery-ui/jquery-ui.min.js', 'gallery.js'],
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'profile_id' => $profile_id,
            'galleryImages' => $galleryImages
        ]);
    }

    public function updateImagePosition(Request $request, Api $api, Security $security)
    {
        $response = false;
        if(isset($_POST) && !empty($_POST)){
            $resp = $api->request('updateImagePosition', 'POST', array('id'=>$_POST['id'],'position'=>$_POST['position']));
            $resp = json_decode($resp, true);
            $response = $resp;
        }
        var_dump($_POST);
        exit;
    }

    public function uploadImage($profile_id = null, Request $request, Api $api, Security $security)
    {
        $response = false;
        if(isset($_FILES) && !empty($_FILES) && isset($_POST) && !empty($_POST)){
            $resp = $api->request('uploadImage', 'POST', array('profile_id'=>$_POST['uId'], 'image'=>$_FILES['image']) );
            echo $resp;exit;
        }
        exit;
    }

    public function setFavoriteImage(Request $request, Api $api, Security $security)
    {
        $response = false;
        if(isset($_POST) && !empty($_POST)){
            $resp = $api->request('setFavoriteImage', 'POST', array('id'=>$_POST['id'],'profile_id'=>$_POST['profile_id']));
            $resp = json_decode($resp, true);
            $response = $resp;
        }
        var_dump($response);
        exit;
    }

    public function deleteImage(Request $request, Api $api, Security $security)
    {
        $response = false;
        if(isset($_POST) && !empty($_POST)){
            $resp = $api->request('deleteImage', 'POST', array('id'=>$_POST['id'],'profile_id'=>$_POST['profile_id']));
            $resp = json_decode($resp, true);
            $response = $resp;
        }
        var_dump($response);
        exit;
    }

    public function description(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'description');
        $resp = $api->request('adminText/'.$lang.'/description/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];
       
        if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            $api->request('setDescription', 'POST', array('profile_id'=>$id,'description'=>$_POST['description']));
        }
        $resp2 = $api->request('getDescription/'.$id, 'GET', array('profile_id'=> $id));
        $resp2 = json_decode($resp2, true);
        $description = $resp2['response']['description'];
        
        return $this->render('user_profile/description.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'description',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'styles' => ['../bootstrap/global/plugins/bootstrap-summernote/summernote.css'/*,'profile/gallery.css'*/],
            'scripts' => ['../bootstrap/global/plugins/bootstrap-summernote/summernote.min.js','../bootstrap/global/plugins/jquery-ui/jquery-ui.min.js', 'description.js'],
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'description' => $description
        ]);
    }

    public function contact(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'contact');
        $resp = $api->request('adminText/'.$lang.'/contact/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];
       
        if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            dump($_POST );
            $api->request('setContactEmail', 'POST', array('profile_id'=>$id,'email'=>$_POST['email']));
        }
        $resp2 = $api->request('getContactEmail/'.$id, 'GET', array('profile_id'=> $id));
        $resp2 = json_decode($resp2, true);
        $email = $resp2['response']['email'];
        
        return $this->render('user_profile/contact.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'contact',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'email' => $email
        ]);
    }

    public function payment_method(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'payment-method');
        $resp = $api->request('adminText/'.$lang.'/payment_method/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];



        $pm = $api->request('getAllPaymentMethods/'.$lang, 'GET', array('lang'=>$lang));
        $pm = json_decode($pm, true);
        $all_payment_methods = $pm['response'];

        if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            dump($_POST);
            $api->request('setPaymentMethods', 'POST', array('profile_id'=>$id,'methods'=>$_POST['methods']));
        }
        $resp2 = $api->request('getUserPaymentMethods/'.$id, 'GET', array('profile_id'=> $id));
        $resp2 = json_decode($resp2, true);
        
        $selectedMethods = explode(',', $resp2['response']['payment_methods']);
        dump($selectedMethods);
        
        return $this->render('user_profile/payment_method.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'payment_method',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'all_payment_methods' => $all_payment_methods,
            'selectedMethods' => $selectedMethods
        ]);
    }


    public function about_me(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'about-me');
        $resp = $api->request('adminText/'.$lang.'/about_me/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];

        $up = $api->request('getUserProfiles/'.$id, 'GET', array('userId'=>$id));
        $up = json_decode($up, true);
        $user_profiles = $up['response'];

        $pm = $api->request('getFiltersAndSubfilters/'.$lang, 'GET', array('lang'=>$lang));
        $pm = json_decode($pm, true);
        $filters_subfilters = $pm['response'];

        //ordeno los filtros y sus subfiltros para poder usarlos en las views
        $filters = array();
        foreach($filters_subfilters as $subfiltros){
            if(!isset($filters[$subfiltros['filter_id']])){
                $filters[$subfiltros['filter_id']] = array();
                $filters[$subfiltros['filter_id']]['id'] = $subfiltros['filter_id'];
                $filters[$subfiltros['filter_id']]['name'] = $subfiltros['filter_name'];
                $filters[$subfiltros['filter_id']]['sub_filters'] = array();
            }
            array_push($filters[$subfiltros['filter_id']]['sub_filters'], array('subfilter_id'=>$subfiltros['sub_filter_id'], 'name'=>$subfiltros['sub_filter_name']));
        }
        dump($filters);
        /*if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            dump($_POST);
            $api->request('setPaymentMethods', 'POST', array('userId'=>$id,'methods'=>$_POST['methods']));
        }
        $resp2 = $api->request('getUserPaymentMethods/'.$id, 'GET', array('userId'=> $id));
        $resp2 = json_decode($resp2, true);
        
        $selectedMethods = explode(',', $resp2['response']['payment_methods']);
        dump($selectedMethods);*/
        
        return $this->render('user_profile/about_me.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'about_me',
            'lang'=>$lang,
            'user_profiles' => $user_profiles,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'filters' => $filters,
            'styles' => ['../bootstrap/global/plugins/bootstrap-select/css/bootstrap-select.min.css','../bootstrap/global/plugins/bootstrap-slider/10.0.0/css/bootstrap-slider.min.css', '../bootstrap/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css','profile/about_me.css'],
            'scripts' => ['../bootstrap/global/plugins/bootstrap-select/js/bootstrap-select.min.js', '../bootstrap/pages/scripts/components-bootstrap-select.min.js', '../bootstrap/global/plugins/bootstrap-slider/10.0.0/bootstrap-slider.min.js', '../bootstrap/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js', 'about_me.js'],
        ]);
    }
}