<?php

namespace App\Http\Controllers;

 // use Illuminate\Http\Request;
use Request;
use App\Productdetail;
use App\Product;
use Cart;
use Auth;
use Session;
use Stripe\Charge;
use Stripe\Stripe;
use App\Order;

class ShoppingCartController extends Controller
{
	public function index() {
		return view('web.shopping_cart');
	}

	public function getAddToCart(Request $request, $id) {
		$product 		= Product::findOrFail($id);
		Cart::add(['id'=>$id,'name'=>$product->name,'qty'=>1,'price'=>$product->price]);
		$content = Cart::content();

		return redirect('gio-hang');
	}

	public function giohang() {
		$content 	= Cart::content();
		$subtotal   = Cart::subtotal();
		$count 		= Cart::count();
		return view('web.shopping_cart',['content'=>$content, 'subtotal'=>$subtotal,'count'=>$count]);
	}

	public function xoasanpham($id) {
		Cart::remove($id);
		return redirect('gio-hang');
	}
	public function capnhat() {
		if(Request::ajax()) {
			$id = Request::get('id');
			$qty = Request::get('qty');
			Cart::update($id,$qty);
			echo "oke";
		}
	}
	public function checkout() {
		$content 	= Cart::content();
		$subtotal   = Cart::subtotal();
		$count 		= Cart::count();
		return view('web.checkout',['content'=>$content, 'subtotal'=>$subtotal,'count'=>$count]);
	}

	 public function postCheckout(Request  $request) {
        $subtotal   = Cart::subtotal();
        Stripe::setApiKey("sk_test_9DnCfzOdw8zoAwtC9awYK4Z4");
     
        $charge = Charge::create(array(
            "amount" => $subtotal*100,
            "currency" => "usd",
              "source" => Request::input('stripeToken'), // obtained with Stripe.js
              "description" => "Charge for emily.martinez@example.com"
              ));

        $order = new Order();
        $order->name = Request::input('name');
        $order->address = Request::input('address');
        $order->payment_id = $charge->id;
        $order->save();
        // Auth::user()->orders()->save($order);

        return  redirect()->route('checkout')->with('success','Successfully purchased');        
    }

}
