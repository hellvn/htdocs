<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckOutController extends Controller
{
    public function index(){
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', compact('carts', 'total', 'subtotal'));
    }

    public function addOrder(Request $request){
//        them don hang
        $order = Order::create($request->all());

//        them chi tiet don hang
        $carts = Cart::content();

        foreach ($carts as $cart){
            $data = [
                'order_id'=>$order->id,
                'product_id'=>$cart->id,
                'qty'=>$cart->qty,
                'amount'=>$cart->price,
                'total'=>$cart->price * $cart->qty,
            ];

            OrderDetail::create($data);
        }

//        xoa gio hang
        Cart::destroy();



//        tra ve ket qua
        return 'Success!';
    }

}
