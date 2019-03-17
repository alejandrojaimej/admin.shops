<?php
/**
 * 
 * CLASE ENCARGADA DEL PAGO POR PAYPAL
 */
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Utils\Api;
use App\Utils\Security;
use App\Utils\Paypal;

class PayPalController extends AbstractController
{
    public function main($profile_id = null, Request $request, Api $api, Security $security, Paypal $paypal)
    {
        echo 'Inicio<br>';
        
        $paypal->makePayment('0.02');

        echo '<br>fin';
        exit;
    }

    public function paymentOK($profile_id = null, Request $request, Api $api, Security $security){
        echo 'pago OK';exit;
    }
    public function paymentKO($profile_id = null, Request $request, Api $api, Security $security){
        echo 'pago KO';exit;
    }
}