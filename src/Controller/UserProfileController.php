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
    public function gallery(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'gallery');
        $resp = $api->request('adminText/'.$lang.'/gallery/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];        

        $gallery = $api->request('userGallery/'.$id);
        $gallery = json_decode($gallery, true);
        $galleryImages = $gallery['response'];
        return $this->render('user_profile/gallery.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'gallery',
            'lang'=>$lang,
            'styles' => ['../bootstrap/global/plugins/dropzone/dropzone.min.css','profile/gallery.css'],
            'scripts' => ['../bootstrap/global/plugins/dropzone/dropzone.min.js','../bootstrap/global/plugins/jquery-ui/jquery-ui.min.js', 'gallery.js'],
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
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
        var_dump($response);
        exit;
    }

    public function uploadImage(Request $request, Api $api, Security $security)
    {
        $response = false;
        if(isset($_FILES) && !empty($_FILES) && isset($_POST) && !empty($_POST)){
            $resp = $api->request('uploadImage', 'POST', array('userId'=>$_POST['uId'], 'image'=>$_FILES['image']) );
            echo $resp;exit;
        }
        exit;
    }

    public function setFavoriteImage(Request $request, Api $api, Security $security)
    {
        $response = false;
        if(isset($_POST) && !empty($_POST)){
            $resp = $api->request('setFavoriteImage', 'POST', array('id'=>$_POST['id'],'userId'=>$_POST['userId']));
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
            $resp = $api->request('deleteImage', 'POST', array('id'=>$_POST['id'],'userId'=>$_POST['userId']));
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
       
        if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            $api->request('setDescription', 'POST', array('userId'=>$id,'description'=>$_POST['description']));
        }
        $resp2 = $api->request('getDescription/'.$id, 'GET', array('userId'=> $id));
        $resp2 = json_decode($resp2, true);
        $description = $resp2['response']['description'];
        
        return $this->render('user_profile/description.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'description',
            'lang'=>$lang,
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
       
        if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            dump($_POST );
            $api->request('setContactEmail', 'POST', array('userId'=>$id,'email'=>$_POST['email']));
        }
        $resp2 = $api->request('getContactEmail/'.$id, 'GET', array('userId'=> $id));
        $resp2 = json_decode($resp2, true);
        $email = $resp2['response']['email'];
        
        return $this->render('user_profile/contact.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'contact',
            'lang'=>$lang,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'email' => $email
        ]);
    }

    public function payment_method(Request $request, Api $api, Security $security)
    {
        $lang = $locale = $request->getLocale();
        $id = $security->checkLogged($lang, 'payment_method');
        $resp = $api->request('adminText/'.$lang.'/payment_method/'.$id);
        $resp = json_decode($resp, true);
        $resp = $resp['response'];
       
        if(isset($_POST) && !empty($_POST) && !isset($_POST['cancel'])){
            $api->request('setContactEmail', 'POST', array('userId'=>$id,'email'=>$_POST['email']));
        }
        $resp2 = $api->request('getContactEmail/'.$id, 'GET', array('userId'=> $id));
        $resp2 = json_decode($resp2, true);
        $email = $resp2['response']['email'];
        
        return $this->render('user_profile/payment_method.html.twig', [
            'controller_name' => 'UserProfile',
            'function_name' => 'payment_method',
            'lang'=>$lang,
            'text' => $resp['texts'],
            'user' => $resp['user'],
            'userId' => $id,
            'email' => $email
        ]);
    }
}
