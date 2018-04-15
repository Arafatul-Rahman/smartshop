<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prodauct;
use Cart;

class cartController extends Controller
{
    public function addTocart(Request $request){
    	$produccart=prodauct::find($request->id);
    	
    	Cart::add([
    		'id'=> $request->id,
    		'name'=> $produccart->productName,
    		'price'=> $produccart->productPrice,
    		'qty'=> $request->qty,
    		'options'=>[
    			'Image'=>$produccart->productImage
    		]
    	]);
    	return redirect('/cart/show');
    	

    }
    public function cartshow(){
    	$productshowall = Cart::content();
    	
    	return view('fonEnd.cart.cartshow',['productshowall'=>$productshowall]);
    }
    public function cartdelete($id){
    	Cart::remove($id);
    	return redirect('/cart/show')->with('massege','delete product from cart');

    }
    public function cartupdate(Request $request){
    	Cart::update($request->rowId,$request->qty);
    	return redirect('/cart/show');
    }
   public function checkout(){
    	return view('fonEnd.cart.checkout');
    }
   

}
