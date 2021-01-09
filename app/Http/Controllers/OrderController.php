<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Illuminate\Support\Facades\DB;
use App\Models\Order;
class OrderController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['index', 'Details','search']]);
    }
    public function order(){
        $userId = auth::id();
        $prod = DB::table('carts')->join('products', 'carts.product_id','=','products.id')->where('carts.user_id',$userId)->select('products.*','carts.id as cartid')->get();

        $order = DB::table('carts')->join('products', 'carts.product_id','=','products.id')->where('carts.user_id',$userId)->sum('products.price');
         
        return view('products.order')->with('order',$order);
        // return $order->name;
    }
    public function finalorder(Request $req){
        $userId = auth::id();
        $fin =  new Order();
        $cart = Cart::where('user_id',$userId)->get();
        $this->validate($req,[
            'address' =>'required',
            'payment'=>'required'  
        ]);
        foreach($cart as $carts){
          $fin->insert([
              'Address'=>$req->address,
              'product_id'=>$carts->product_id,
              'user_id'=>$carts->user_id,
              'paymentMethod'=>$req->payment,
              'paymentStatus'=>'pending',
              'status'=>"pending"

          ]);
        }
       return view('/products')->with('success', 'order has been placed');

    }
    public function pending(){
        $userId = auth::id();
         $pends = DB::table('orders')->join('products', 'orders.product_id','=','products.id')->where('orders.user_id',$userId)->select('*')->get();
        
        return view('products.pending')->with('pends', $pends);
    }
}
