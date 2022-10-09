<?php

namespace App\Http\Controllers;

use NagadAPI\Nagad;
use Illuminate\Http\Request;

class NagadController extends Controller
{
    public function createPayment() 
    {
        /**
         * Method 1: Quickest
         * This will automatically redirect you to the Nagad PG Page
         * */

        return Nagad::setOrderID('ORDERID123')
            ->setAmount('540')
            ->checkout()
            ->redirect();
        
        /**
         * Method 2: Manual Redirection
         * This will return only the redirect URL and manually redirect to the url
         * */

        $url = Nagad::setOrderID('ORDERID123')
            ->setAmount('540')
            ->checkout()
            ->getRedirectUrl();

        return ['url' => $url];


        /**
         * Method 3: Advanced 
         * You set additional params which will be return at the callback
         * */

        return Nagad::setOrderID('ORDERID123')
            ->setAmount('540')
            ->setAddionalInfo(['pid' => 9, 'myName' => 'DG'])
            ->checkout()
            ->redirect();


        /**
         * Method 4: Advanced Custom Callabck
         * You can set/override callback url while creating payment
         * */

        return Nagad::setOrderID('ORDERID123')
            ->setAmount('540')
            ->setAddionalInfo(['pid' => 9, 'myName' => 'DG'])
            ->setCallbackUrl("https://manual-callback.url/callback")
            ->checkout()
            ->redirect();
    }
    

	//To receive the callback response use this method: 

    /**
     * This is the routed callback method
     * which receives a GET request.
     * 
     * */

    public function callback(Request $request)
    {
        $verified = Nagad::callback($request)->verify();
        if($verified->success()) {

            // Get Additional Data
            dd($verified->getAdditionalData());
            
            // Get Full Response
            dd($verified->getVerifiedResponse());
        } else {
            dd($verified->getErrors());
        }
    }
}
