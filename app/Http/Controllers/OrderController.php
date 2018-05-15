<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\OrderDetail;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use DB;

class OrderController extends Controller
{
    public function listOrder()
    {
    	$orders = Order::where('user_id',Auth::user()->id)->get();
    	return view('PageStore.shoppingCart',compact('orders'));
    }
    public function status($id,$status)
    {
    	$order = Order::findOrFail($id);
    	// echo $status;
    	if($status == 2){
    		$data['status'] = 3;
    	} else {
    		$data['status'] = 2;
    	}
    	$order->update($data);
    	return back();
    }
    public function detailOrder($id)
    {
    	$order = Order::findOrFail($id);
        $order_detail = $order->order_detail;
    	return view('PageStore.detailOrder',compact('order','order_detail'));
    }
}
