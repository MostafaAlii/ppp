<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Twocheckout;
use Twocheckout_Charge;

class TwoCheckoutService
{

    public function pay($info)
    {

        Twocheckout::privateKey('2BCAB5A0-2B4D-4AC6-9165-E02E70F6F924');
        Twocheckout::sellerId('1659666');
        Twocheckout::verifySSL(false);
        Twocheckout_Charge::form($info, 'Checkout');
    }

//    protected $merchantCode;
//    protected $secretKey;
//    protected $publishableKey;
//    protected $sandbox;
//
//    public function __construct()
//    {
//        $this->merchantCode = config('services.two_checkout.merchant_code');
//        $this->secretKey = config('services.two_checkout.secret_key');
//        $this->publishableKey = config('services.two_checkout.publishable_key');
//        $this->sandbox = config('services.two_checkout.sandbox');
//    }
//
//    public function generateToken($orderID, $amount, $currency) {
//        $response = Http::post('https://sandbox.2checkout.com/token', [
//            'sellerId' => $this->merchantCode,
//            'privateKey' => $this->secretKey,
//            'publishableKey' => $this->publishableKey,
//            'currency' => $currency,
//            'token' => 'your_token', // يجب استبداله بفعلي
//            'order_id' => $orderID,
//            'amount' => $amount,
//        ]);
//        return $response->json();
//    }
//
//    public function purchase(array $parameter) {
//        $response = Http::post('https://sandbox.2checkout.com/purchase', $parameter);
//        return $response->json();
//    }
//
//    public function refund(array $parameter) {
//        $response = Http::post('https://sandbox.2checkout.com/refund', $parameter);
//        return $response->json();
//    }
}
