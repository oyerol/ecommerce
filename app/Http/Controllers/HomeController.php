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
    public function index()
    {

        $user = User::where('usertype','user')->get()->count();

        $product = Product::all()->count();

        $order = Order::all()->count();

        $delivered = Order::where('status','delivered')->get()->count();

        return view('admin.index',compact('user','product','order','delivered'));
    }

    public function home()
    {
        $products = Product::all(); 

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.index', compact('products','count'));
    }

    public function login_home()
    {
        $products = Product::all();

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.index', compact('products', 'count'));
    }
    

    public function product_details($id)
    {
        $data = Product::find($id);

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;
    
            $count = cart::where('user_id', $userid)->count();
        }
        else{
            $count = '';
        }

        return view('home.product_details',compact('data','count'));
    }

    public function add_cart($id)
{
    $product_id = $id;
    $user = Auth::user();
    $user_id = $user->id;
    
    $data = new Cart;

    $data->user_id = $user_id;
    $data->product_id = $product_id;

    $data->save();

    toastr()->timeout(10000)->closeButton()->success('Cart added successfully.');

    return redirect()->back();
}

public function mycart()
{
    if(Auth::id())
    {
        $user = Auth::user();
        $user_id = $user->id;
        
        $count = Cart::where('user_id', $user_id)->count();
        $cart = Cart::where('user_id', $user_id)->get();
    }
    else
    {
        $count = '';
        $cart = [];
    }

    return view('home.mycart', compact('cart', 'count'));
}

public function remove($id)
{
    $cartItem = Cart::find($id);

    if ($cartItem) {
        $cartItem->delete();
    }

    return redirect()->back()->with('success', 'Item removed from cart.');
}

public function confirm_order(Request $request)
{
    $name = $request->name;
    $address = $request->address;
    $phone = $request->phone;
    $userid = Auth::user()->id;

    $cart = Cart::where('user_id', $userid)->get();

    foreach ($cart as $carts) {
        $order = new Order;
        $order->name = $name;
        $order->rec_address = $address;
        $order->phone = $phone;
        $order->user_id = $userid;
        $order->product_id = $carts->product_id;
        $order->save();
    }

    // Remove all items in the cart for the user after ordering
    Cart::where('user_id', $userid)->delete();

    // Flash success message to session
    session()->flash('success', 'Your order has been placed successfully!');

    return redirect()->back();
}

public function myorders()
{
    $user = Auth::user()->id;

    $count = Cart::where('user_id',$user)->get()->count();

    $order = Order::where('user_id',$user)->get();

    return view('home.order',compact('count','order'));
}



    
}
