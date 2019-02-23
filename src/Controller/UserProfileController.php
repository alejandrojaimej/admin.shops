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
}
