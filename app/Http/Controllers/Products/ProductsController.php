<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use Illuminate\Http\Request;
use App\Models\Product\Product;
use App\Models\Product\Cart;
use App\Models\Product\Order;
use Auth;
use Redirect;
use Session;


class ProductsController extends Controller
{


    public function singleCategory($id)
    {
        $products = Product::select()->orderBy('id', 'desc')
            ->where('category_id', $id)->get();

        return view('products.singlecategory', compact('products'));

    }

    public function singleProduct($id)
    {
        $product = Product::find($id);
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->get();

        if(isset(Auth::user()->id)) {
            
            $checkInCart = Cart::where('pro_id', $id)
            ->where('user_id', Auth::user()->id)
            ->count();

            return view('products.singleproduct', compact('product', 'relatedProducts', 'checkInCart'));
        } else {
            return view('products.singleproduct', compact('product', 'relatedProducts'));

        }
        

    }

    public function shop()
    {
        $categories = Category::select()->orderBy('id', 'desc')->get();

        $mostWanted = Product::select()->orderBy('name', 'desc')->take(5)->get();

        $vegetables = Product::select()->where('category_id', '=', 5)->orderBy('id', 'desc')->take(5)->get();

        $meats = Product::select()->where('category_id', '=', 1)->orderBy('id', 'desc')->take(5)->get();

        $fishes = Product::select()->where('category_id', '=', 2)->orderBy('id', 'desc')->take(5)->get();

        $fruits = Product::select()->where('category_id', '=', 4)->orderBy('id', 'desc')->take(5)->get();


        return view('products.shop', compact('categories', 'mostWanted', 'vegetables', 'meats', 'fishes', 'fruits'));

    }

    public function addToCart(Request $request)
    {

        $addCart = Cart::create([
            "name" => $request->name,
            "price" => $request->price,
            "qty" => $request->qty,
            "image" => $request->image,
            "pro_id" => $request->pro_id,
            "user_id" => Auth::user()->id,
            "subtotal" => $request->qty * $request->price,

        ]);



        if ($addCart) {
            return Redirect::route('single.product', $request->pro_id )->with('success', 'Item added To cart');

        }

    }

    public function cart()
    {

        $cartProducts = Cart::select()->where('user_id', Auth::user()->id)
        ->get();

        $subTotal = Cart::where('user_id', Auth::user()->id)
        ->sum('subtotal');


        return view('products.cart', compact('cartProducts', 'subTotal'));


    }

    public function deleteFromCart($id)
    {

        $deleteCart = Cart::find($id);

        $deleteCart->delete();

        if ($deleteCart) {
            return Redirect::route('products.cart')->with('delete', 'Item deleted from cart');

        }

    }


    
    public function prepareCheckout(Request $request)
    {

        $price = $request->price;

        $value = Session::put('value', $price);
        $newValue = Session::get($value);

 
        if ($newValue > 0) {
            return Redirect::route('products.checkout');

        }

    }

    public function checkout()
    {
        $cartItems = Cart::select()->where('user_id', Auth::user()->id)->get();

        $checkoutsubtotal = Cart::select()->where('user_id', Auth::user()->id)->sum('subtotal');

        return view('products.checkout', compact('cartItems', 'checkoutsubtotal'));


    }


    public function processCheckout(Request $request)
    {

        $checkout= Order::create([
            "name" => $request->name,
            "last_name" => $request->last_name,
            "address" => $request->address,
            "town" => $request->town,
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
            "price" => $request->price,
            "user_id" => $request->user_id,
            "order_notes" => $request->order_notes,
            "paid" => false,

        ]);

        $value = Session::put('value', $request->price);
        $newValue = Session::get($value);
        // Retrieve the order ID
        $orderId = $checkout->id;

        // Store the order ID in the session
        Session::put('order_id', $orderId);
        if ($checkout) {
            return Redirect::route('products.pay');

        }

    }
    
    public function payWithPaypal()
    {
       
        return view('products.pay');


    }

    public function success()
    {
        $deleteItemsFromCart = Cart::where('user_id', Auth::user()->id);

        $deleteItemsFromCart->delete();
       
        if ($deleteItemsFromCart) {
            // Retrieve the order ID from the session
            $orderId = Session::get('order_id');
    
            // Update the "paid" column to true
            Order::where('id', $orderId)->update(['paid' => true]);
    
            // Forget the order ID session variable
            Session::forget('order_id');
    
            Session::forget('value');
            return view('products.success');
        }
    }
}
