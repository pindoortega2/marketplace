<?php

namespace App\Http\Controllers;

use App\Mail\OrderPaid;
use GrahamCampbell\ResultType\Success;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Mail;

class PaypalController extends Controller {

    public function getExpressCheckout($orderId) {        

                
        $checkoutData = $this->checkoutData($orderId);
        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($checkoutData);

        //dd($response);

        return redirect($response['paypal_link']);

    }

    public function getExpressCheckoutSuccess(Request $request, $orderId) {
        
        $provider = new ExpressCheckout; 
        $token = $request->token;
        $PayerID = $request->PayerID;
        $checkoutData = $this->checkoutData($orderId);

        $response = $provider->getExpressCheckoutDetails($token);

        if(in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {

            // Note that 'token', 'PayerID' are values returned by PayPal when it redirects to success page after successful verification of user's PayPal info.
            $payment_status = $provider->doExpressCheckoutPayment($checkoutData, $token, $PayerID);
            $status = $payment_status['PAYMENTINFO_0_PAYMENTSTATUS'];

            if (in_array($status, ['Completed', 'Processed'])) {

                $order = Order::find($orderId);
                $order->is_paid = 1;
                
                $order->save();


                //$correo = $order->user->email;
                //Mail::to($correo)->send(new OrderPaid($order));
                //dd('hasta aqui ingresa');
                \Cart::session(auth()->id())->clear(); //Limpiamos el carrito de compras


                return redirect()->route('shop-index')->withMessage('Pago Exitoso');

            }

        }


        return redirect()->route('shop-index')->withError('Pago Fallido');


    }

    public function cancelPage() {
        dd('cancelado');
    }

    public function checkoutData($orderID){

        $cart = \Cart::session(auth()->id());        

        $cartItems = array_map(function($item){

            return [
                'name' => $item['name'],
                'price' => $item['price'],                
                'qty' => $item['quantity'],
            ];

        }, $cart->getContent()->toarray());        

        $checkoutData = [
            'items' => $cartItems,
            'invoice_id' => uniqid(),
            'invoice_description' => "Descripción del pago",
            'return_url' => route('paypal-success', $orderID),
            'cancel_url' => route('paypal-cancel'),
            'total' => $cart->getTotal(),
        ];

        return $checkoutData;

    }



    
}
