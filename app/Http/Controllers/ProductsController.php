<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Technology;


use Illuminate\Support\Facades\Auth;
class ProductsController extends Controller
{
 
   //redirect view
    public function about()
    {
        return view('PageStore.about');
    }

    public function blog()
    {
        return view('PageStore.blog');
    }

    public function contact()
    {
        return view('PageStore.contact');
    }


    //show san pham
    public function index()
    {
        $products = Product::where('quality','>', 4.6)->paginate(12);  
        return view('PageStore.index', compact('products'));
    }
     
    //show san pham tung the loai
    public function store($id)
    {    
        $category =  Category::where('id', $id)->first();
        $products =  $category->products()->paginate(12);
        return view('PageStore.store', compact('products', 'category'));
    }

    public function searchProduct(Request $request)
    {
        $searchQuery = $request->search;
           if (isset($searchQuery)) {     
           $products = Product::where('name', 'like', '%' . $searchQuery . '%')->paginate(12);
            return view('PageStore.search', compact('products')); 
           }
            return view('PageStore.search');   

            //if (isset($searchQuery)){
         // $products = Product::whereHas('Category', function($query) use ($searchQuery) {
          //      $query->where('name', 'like', '%' . $searchQuery . '%' ); 
         //  })
          // ->orWhere('name', 'like', '%' . $searchQuery . '%');
             
          // }
          // $products = $products->paginate(18);
          
          
                     
    }

    //tiem san pham duoi tren gia tien
    //chung vao 1 funnction  nhan 2 param va sua lai ten 
     public function searchFollowPrice($price1,$price2)
     {
         if ($price2 <= 1000000){
            $products = Product::where('price', '<', 1000000)->paginate(12);
            return view('PageStore.search' , compact('products'));   
         }
         else if ($price1 < 1000110 && $price1 < $price2){ 
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2)->paginate(12);
            return view('PageStore.search' , compact('products'));   
         }
         else if($price1 <3000100 && $price1 < $price2){
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2)->paginate(12);
            return view('PageStore.search' , compact('products'));
         }
         else if($price1 <6000100 && $price1 < $price2){
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2)->paginate(12);
            return view('PageStore.search' , compact('products'));
         }
         else if($price1 <10000100 && $price1 < $price2){
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2)->paginate(12);
            return view('PageStore.search' , compact('products'));
         }
         else if($price1 <15000100 && $price1 < $price2){
            $products = Product::where('price','>', $price1)->where('price', '<', $price2)->paginate(12);
            return view('PageStore.search' , compact('products'));
         }

     }
    // END tim Kiem
    
    //view details
   public function viewDetail($id)
    {        
        $product = Product::findOrFail($id);
        $category = Category::find($product->category_id);      
        $technology = $product->technology()->first(); 
        return view('PageStore.single', compact('product', 'technology', 'category'));
    }
    
    //Search Order
    public function list()
    {
        $order = Order::all();   
        $user  = User::all();
        $value_price = OrderDetail::sum('price');
        $value_quantity = OrderDetail::sum('quantity');
        return view('PagesAdmin.orders.list_order', compact('order', 'user', 'value_price', 'value_quantity'));
    }

    public function pending_order()
    {
        $order = OrderDetail::where('status', 0)->get();
        return view('PagesAdmin.orders.pending_order', compact('order'));     
    }


    public function search_admin(Request $request)
    {
        $search = $request->search;
        $user = User::where('name', '=', $search)->first();
        if(isset($user)){   
            $order = $user->Orders()->get();
            return view('PagesAdmin.orders.search_order', compact('search', 'order', 'user'));
        }
        $order = Order::where('id', 'like', $search)->orWhere('date_order', 'like', '%' .$search. '%')->get();
        return view('PagesAdmin.orders.search_order', compact('search', 'order', 'user'));   
    }

    public function delete($id)
    {
        $order = Order::findorfail($id);
        $order->delete();
        return redirect('admin/order/order_list')->with('thongbao_delete', 'Delete Successful');
    } 



    



}
