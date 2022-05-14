<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;


class PayPalController extends Controller
{
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function payment()
    {
        // dd('here');

        $data = [];
        $data['items'] = [
          [

                'name' => session()->get('checkout')['name'] . session()->get('checkout')['last_name'],
                'price' => session()->get('checkout')['package_amount'],
                'desc'  => 'Payment for AmeaToday',
                'qty' => 1

            // 'name' => session()->get('checkout')['name'],
            // 'price' => session()->get('User_Signup')['package_amount'],
            // 'desc' => 'Perchase From Buy Best',
            // 'qty' => 1
          ]
        ];
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['total'] = session()->get('checkout')['package_amount'];
        // dd($data);

        $provider = new ExpressCheckout();

        // $provider->setApiCredentials($config);
        $response = $provider->setExpressCheckout($data);

        // Use the following line when creating recurring payment profiles (subscriptions)
        $response = $provider->setExpressCheckout($data, true);

         // This will redirect user to PayPal
        return redirect($response['paypal_link']);
        // return redirect($response['paypal_link']);


    }

    public function StorePaymentDetails(Request $request)
    {
        // dd($request->all());
        session()->get('checkout')['name'];
    }
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        dd('Your payment');
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->token);
        // dd($response);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
        // dd('Your payment');

             }

        // return Contact::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        // ]);
        dd('Something is wrong.');
    }
}
