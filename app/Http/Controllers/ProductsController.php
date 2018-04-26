<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\User;
class ProductsController extends Controller
{
    //show san pham
     public function index()
     {
         $products= Product::where('quality','>',4.6)->get();

       
         return view('PageStore.index',compact('products'));
     }




   //show san pham tung the loai
   public function store($id)

   {
     $category=Category::where('id',$id)->first();

     $products=$category->products()->get();
     


     return view('PageStore.store',compact('products','category'));
   }
  
  //Search Order
  public function list()
  {
      $order = Order::all();   
      $user  = User::all();
      $value_price = OrderDetail::sum('price');
      $value_quantity = OrderDetail::sum('quantity');
      return view('PagesAdmin.orders.list_order', compact('order','user', 'value_price', 'value_quantity'));
  }

  public function pending_order()
  {
      $order = OrderDetail::where('status',0)->get();
      return view('PagesAdmin.orders.pending_order', compact('order'));     
  }

  public function search(Request $request)
  {
      $search = $request->search;
      /*$order = Order::where('id', 'like', $search)->orWhere('date_order', 'like', '%' .$search. '%')*/
      //->get();

     $user = User::where('name', '=', $search)->first();
      if(isset($user))
        {
        $order = $user->Orders()->get();
        return view('PagesAdmin.orders.search_order', compact('search', 'order', 'user'));
        }
      else
      {
        $order = Order::where('id', 'like', $search)->orWhere('date_order', 'like', '%' .$search. '%')->get();
        return view('PagesAdmin.orders.search_order', compact('search', 'order', 'user'));
      }   
  }

  public function delete($id)
  {
      $order = Order::findorfail($id);
      $order->delete();
      return redirect('admin/order/order_list')->with('thongbao_delete','Delete Successful');
  }   
  

}
