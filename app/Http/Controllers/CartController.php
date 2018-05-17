<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Technology;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckOutRequest;
use DB;

class CartController extends Controller
{
    // them vao gio hang 

    public  function addCart($id)
    {
      
       $product = Product::findOrFail($id);
       $data = [
       	    'id'=> $product->id,
       			'qty' => 1,
       			'price' => $product->price,
       			'name' => $product->name,
       	];
        Cart::add($data);   
        return back();	
    }
    public function shoppingCart()
    {
      
    	return view('PageStore.cart', compact('quantities'));
    }

    public function deleteCart($rowId)
    {
        if (!empty($rowId)) {
          cart::remove($rowId);
          return back();     
        }
    }
   
    public function checkOut(CheckOutRequest $request)
   {

    
    if (Auth::check()) {
       $data['name'] = $request->name;
       $data['address'] = $request->address;
       $data['phone_number'] = $request->phone_number;
       $data['user_id']   = Auth::user()->id; 
       $data['date_order'] = $request->date_order;
       $data['status'] = 2;
       $data['total'] = str_replace(',','',Cart::subtotal());
       
       $order = Order::create($data);   
       $carts = Cart::content();
      foreach ($carts as $key => $item) {

         $data['quantity'] = $item->qty;
         $data['order_id'] = $order->id;
         $data['product_id'] = $item->id;
         $data['price'] = str_replace(',','',$item->price);
         OrderDetail::create($data);   
       }
       Cart::destroy();     
      return back()->with('success','Đặt Hàng Thành Công');
    }

    return back()->with('status','Vui Lòng Đăng Nhập Trước Khi Đặt Hàng');

  }
  public function updateIncrement($rowId)
  {
        
        $data['qty']= Cart::get($rowId)->qty+1;
        Cart::update($rowId,$data);
        return back();
  }
  public function updateDecrese($rowId)
  { 
        $data['qty']= Cart::get($rowId)->qty-1;
        Cart::update($rowId,$data);
        return back();
   }
  
}
