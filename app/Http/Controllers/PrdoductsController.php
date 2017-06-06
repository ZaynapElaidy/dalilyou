<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;
use App\Order;
use App\User;

class PrdoductsController extends Controller
{
	
     public function post (Request $request)
    {
      //dd($request->get('type'));
    	$product              =  new Product;
    	$product->type        = $request->type;
    	$product->number      = $request->num;
    	$product->wight       = $request->wight;
    	$product->price       = $request->price;
    	$product->user_id     = Auth::id();
    	$product->save();
        return redirect('/home'); 
    }
     public function postorder (Request $request)
    {
     //dd($request->get('id'));
    	$order              =  new Order; 

    	$order->number      = $request->num2;
    	$order->wight       = $request->wight2;
    	$order->price       = $request->price2;
    	$order->user_id     = Auth::id();
    	$order->product_id  =  $request->id;
    	$order->save();
        return redirect('/userOrders'); 
    }
      public function showUserProducts()
    {
    	
    	 $products=Product::where('user_id', Auth::id())->get();
       
        // foreach ($products as $product ) {
        //   echo ($product->type.'<br>' .$product->number .'<br>');
        // }
		
       return view('home', compact('products'));
    }
      public function showAllProducts()
      {
        
        $products = Product::all(); 
        // foreach ($products as $product ) {
        //   echo ($product->type.'<br>' .$product->number .'<br>');
        // }
		
       return view('allproducts', compact('products'));
    }
        public function showUserOrders()
    {
    	
    	 $orders=Order::where('user_id', Auth::id())->get();
       
        // foreach ($products as $product ) {
        //   echo ($product->type.'<br>' .$product->number .'<br>');
        // }
		
       return view('userOrders', compact('orders'));
    }


      public function showAllOrders(Request $request)
    {    $products=Product::all();
        $orders = Order::all();
          //$orders=Order::where('product_id',' $request->id')->get();
		
       return view('allorders', compact('orders','products'));
    }
}
