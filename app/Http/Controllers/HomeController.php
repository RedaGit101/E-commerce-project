<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function index()
    {
        return view('admin.index');
    }
    public function home()
    {
        $product = Product::latest()->take(3)->get();
        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
         }
         else
         {
            $count = '';
         }
        return view('home.index',compact('product','count'));
    }
    public function login_home()
    {
        $product = Product::all();
        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
         }
         else
         {
            $count = '';
         }
        return view('home.index',compact('product','count'));
    }
    public function product_details($id)
    {
        $data = Product::find($id);
        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
         }
         else
         {
            $count = '';
         }
        return view('home.product_details',compact('data','count'));
    }
    public function add_cart($id)
    {
        $user = Auth::user();
        $product_id = $id ;
        $user_id = $user->id;
        $data = new Cart;
        $data->user_id = $user_id;
        $data->product_id = $product_id;
        $data->save();
        toastr()->timeout(700)->Success('Product added to cart Successfully');
        return redirect()->back();

    }
    public function mycart()
    {
        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
        $cart = Cart::where('user_id',$userid)->get();
         }
         else
         {
            $count = '';
         }
        return view('home.mycart', compact('count','cart'));
    }
    public function delete_product_cart($id)
  
    {   
        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
        $cart = Cart::where('user_id',$userid)->get();
         }
         else
         {
            $count = '';
         }
        $user = Auth::user();
        $item = Cart::find($id);
        $item->delete();
        return redirect()->back();
        
    }
    public function confirm_order(Request $request)
    {
        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
         }
         else
         {
            $count = '';
         }
        $name = $request->name;
        $address = $request->address;
        $phone = $request->phone;
        $userid = Auth::user()->id;
        $cart = Cart::where('user_id',$userid)->get();
        foreach($cart as $carts)
        {
           $order = new Order;
           $order->product_id = $carts->product_id;
           $order->name = $name;
           $order->rec_address = $address;
           $order->phone = $phone;
           $order->user_id = $userid;
           
           $order->save();      
        }
       $cart_remove = Cart::where('user_id',$userid)->get();
        foreach($cart_remove as $remove)
        {
            $data = Cart::find($remove->id);
            $data->delete();
        } 
        toastr()->timeout(700)->Success('Product ordered Successfully');
        return redirect('/order_summary');
       
    }
    
    public function product_page()
    {
        $product = Product::orderBy('created_at', 'desc')->paginate(6);

        if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
         }
         else
         {
            $count = '';
         }
        return view('home.product_page',compact('product','count'));
    }
    public function product_search(Request $request)
    {   
         if(Auth::id())
        {
        $user = Auth::user();
        $userid = $user->id;
        $count = Cart::where('user_id', $userid)->count();
         }
         else
         {
            $count = '';
         }
        $search = $request->search;
        $product = Product::where('title','LIKE','%'.$search.'%')->orWhere('category','LIKE','%'.$search.'%')->paginate(3);
       
        return view('home.product_page',compact('product','count'));
    }
     public function order_summary()
    {
        $user = Auth::user();
        $userid = $user->id;
        $orderSum = Order::where('user_id', $userid)->with('product')->get(); // Eager load the product relationship
        $count = Cart::where('user_id', $userid)->count();
        return view('home.order_summary', compact('orderSum', 'count'));
    } 
    public function why_us()
    {
        return view('home.why_us');
    }
}
