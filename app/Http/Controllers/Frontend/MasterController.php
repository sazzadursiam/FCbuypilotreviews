<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MasterController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function thank_you_page()
    {
        $order_id = Session::get('order_id');
        $request_all = Session::get('request_all');

        $PAYMENT_KEY = 'kXdv66k906eCyJaTjKbiL3sb3ciwwaVFL4r9MOqSC9qHvmqsnK6cxEskFm0mnjYdVxOlZ3X5Ta7wYsuEjTspzCP6V5bhg1UuhtwX97hc6Pui4uotKy7B6czEctO4bTGL';
        $MERCHANT_UUID = '41fb798a-1057-44f8-a388-4105ee75b4a8';
        $payment = \Cryptomus\Api\Client::payment($PAYMENT_KEY, $MERCHANT_UUID);

        $data = ["order_id" => Session::get('order_id')];


        $succ = $payment->info($data);
        // return $succ;
        if ($succ['payment_status'] == "paid" && $succ['is_final'] == true) {
            $data['to_email'] = $request_all['customer_email'];
            $data['subject'] = "Payment Successful.";
            $data['userName'] = $request_all['customer_name'];
            $data['orderId'] = $order_id;
            $data['packageTitle'] = $request_all['package_title'];
            $data['category'] = $request_all['category'];
            $data['price'] = $request_all['amount'];


            Mail::send('emails.payment_success_mail', $data, function ($message) use ($data) {
                $message->to($data["to_email"])
                    ->subject($data["subject"]);
            });

            Mail::send('emails.admin_order_notification_email', $data, function ($message) use ($data) {
                $message->to("tarungoyal7321@gmail.com")
                    ->subject("New Order Payment Paid in Buy TrustPilot Reviews");
            });
            // Session::flash();
            return view('frontend.thank_you_page', compact(['order_id', 'request_all']));
        } else {
            // Session::flash();
            return redirect()->route('return_page');
        }
    }
    public function return_page()
    {
        return view('frontend.failed_payment');
    }
    public function mail_sent()
    {
        // $data['to_email'] = $customer_email;
        // $data['subject'] = "Order status";
        // $data['userName'] = $customer_name;

        $data['to_email'] = "marufmuzahidul@gmail.com";
        $data['subject'] = "Payment Successful.";
        $data['userName'] = "Maruf";


        Mail::send('emails.payment_success_mail', $data, function ($message) use ($data) {
            $message->to($data["to_email"])
                ->subject($data["subject"]);
        });
        return back();
    }

    public function service_buy_now($slug)
    {
        return view('frontend.service_buy', compact(['slug']));
    }
    public function cryptoPay(Request $request)
    {
        // return $request->all();
        $PAYMENT_KEY = 'kXdv66k906eCyJaTjKbiL3sb3ciwwaVFL4r9MOqSC9qHvmqsnK6cxEskFm0mnjYdVxOlZ3X5Ta7wYsuEjTspzCP6V5bhg1UuhtwX97hc6Pui4uotKy7B6czEctO4bTGL';
        $MERCHANT_UUID = '41fb798a-1057-44f8-a388-4105ee75b4a8';
        $payment = \Cryptomus\Api\Client::payment($PAYMENT_KEY, $MERCHANT_UUID);
        $data = [

            'amount' => $request->amount,

            'currency' => 'USD',

            'order_id' => Str::uuid(),

            'url_return' => 'https://chandigarhppcexpert.com/demo/callback',

            'url_callback' => 'https://chandigarhppcexpert.com/demo/callback',

            'is_payment_multiple' => false,

            'lifetime' => '7200',

        ];


        $result = $payment->create($data);
        if ($result) {
            Session::put('order_id', $result['order_id']);
            Session::put('request_all', $request->all());
            if ($result['url']) {
                return redirect()->to($result['url']);
            }
        }

        // return response()->json([
        //     'result' => $result,
        //     "order_id" => Session::get('order_id'),
        //     "request_all" => Session::get('request_all')
        // ]);

        // $data = ["order_id" => Session::get('order_id')];
        // $succ = $payment->info($data);
        // return $succ;
    }
}
