<?php 
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }
 
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                    'quantity'   => 1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('addOrder'),
            'cancel_url'  => route('checkout'),
        ]);
        // dd($session); 
        return redirect()->away($session->url);
    }

}