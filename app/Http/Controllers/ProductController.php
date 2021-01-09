<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Exists;
use Symfony\Component\HttpFoundation\Session\Session;
class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except'=>['index', 'Details','search']]);
    }
    public function index(){
        $prod =  Product::all();
        return view('products.index')->with('prod', $prod);  
    }

    public function Details($id){
        $prod = Product::find($id);
        $prod->get()->where('id',$id);

        return view ('products.details')->with('prod',$prod);
    }

    public function Addproduct(){
        return view('products.add');
    }
    public function store(Request $req){

        $prod = new Product();
        $this->validate($req,[
            'name' =>'required',
            'price'=>'required',
            'category'=>'required',
            'description'=>'required',
            'gallery'=>'url|required'  
        ]);
        $prod->insert([
                'name'=> $req->name,
                'price'=>'$'.$req->price,
                'category'=>$req->category,
                'description'=>$req->description,
                'gallery'=> $req->gallery 
        ]);
        return back()->with('product_added', 'product succesfully added');
    }

    public function edit($id){
        $prod = Product::find($id);
        return view('products.edit')->with('prod', $prod);
    }
    public function update(Request $req, $id){
        $prod = Product::find($id);
        $prod->update([
                'name'=> $req->name,
                'price'=>$req->price,
                'category'=>$req->category,
                'description'=>$req->description,
                'gallery'=> $req->gallery 
        ]);
        return back()->with('product_update','Product details has been updated succesfully');
    }
    public function delete($id){
        $prod = Product::find($id);
        $prod->delete();
        return redirect('/products')->with('success','successful');
    }
    public function search(Request $req){
            $prod = Product::where('name', 'like','%'.$req->input('search').'%')->get();
            return view('products.search')->with('prod', $prod);
       
    }

    public function addtocart(Request $req){
        
        $cart = new Cart();
        // $prod = new Product();
        $cart->user_id = auth()->user()->id;
        $cart->product_id = $req->product_id;
        $cart->save();
        return redirect('/products');
    }

    public static function cartItem(){

        if(Auth::user()){

            $userId = Auth::user()->id;
            
            return Cart::where('user_id',$userId)->count();
        }else{
            return redirect('/products');
        }
    }

    public static function getcartitem(){

        $userId = auth::id();
        //return $userId;
       // $prod = new Cart();
       //didnt use relationships cause im yet to create the user_products table that will contain user_id and product_id as foreign kets to user and prooduct table
        $prod = DB::table('carts')->join('products', 'carts.product_id','=','products.id')->where('carts.user_id',$userId)->select('products.*','carts.id as cartid')->get();
         return view('products.cartlist')->with('prod',$prod);
    }
    public function removecart($id){
        $del = Cart::find($id);
        $del->delete();
        return redirect('/cartlist')->with('success','removed');
    }
}
