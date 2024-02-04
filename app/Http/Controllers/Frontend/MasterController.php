<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MasterController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function service_buy_now($slug)
    {
        return view('frontend.service_buy', compact(['slug']));
    }
    public function cryptoPay(Request $request)
    {
        return $request->all();
        $PAYMENT_KEY = 'NXOeGKs5Uv7iem6i2LJE9PRmoXYeSo8KfOOw3ZdeLLQUte6xkuyFswskmBWvsMrkbzm34mwlEeeVKSFXpkSYV0Wbm9VN30UpJ5stBCNVn0W22kcaeDeBpWALOt6pWXmz';
        $MERCHANT_UUID = 'ae93ae60-38cb-4c24-8dd4-7d8e46bac12b';
        $payment = \Cryptomus\Api\Client::payment($PAYMENT_KEY, $MERCHANT_UUID);
        $data = [

            'amount' => '0.10',

            'currency' => 'USD',

            'order_id' => Str::uuid(),

            'url_return' => 'https://chandigarhppcexpert.com/demo/return',

            'url_callback' => 'https://chandigarhppcexpert.com/demo/callback',

            'is_payment_multiple' => false,

            'lifetime' => '7200',

        ];


        $result = $payment->create($data);
        // if ($result['url']) {
        //     return redirect()->to($result['url']);
        // }
        return response()->json([
            'result' => $result,
        ]);
        // $data = ["order_id" => "123456"];


        // $succ = $payment->info($data);
        // return $succ;
    }
}
