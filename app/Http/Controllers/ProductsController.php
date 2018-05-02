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
        $products = Product::where('quality','>',4.6)->get();  
        return view('PageStore.index', compact('products'));
    }
     
    //show san pham tung the loai
    public function store($id)
    {
        $category = Category::where('id', $id)->first();     
        $products = $category->products()->get();  
        return view('PageStore.store', compact('products', 'category'));
    }

    public function search(Request $request)
    {
        $value = $request->search;
        $product = Product::where('name',$value)->first();
        $category = Category::where('name', $value)->first();   
        if (isset($product)) {
            return view('PageStore.search', compact('product'));
        }
        elseif (isset($category)) {
            $products = $category->products()->get();
            return view('PageStore.search', compact('products'));
        }
        return view('PageStore.search');

                   
    }

    //tiem san pham duoi tren gia tien
    public function duoi_1_trieu()
    {
        $product = Product::where('price', '<', 1000000)->first();        
        if (isset($product)){
            $category = Category::where('id', $product->category_id)->first();
            return view('PageStore.search', compact('product', 'category'));
        }
        return view('PageStore.search');
   }

    public function MotDen3Trieu()
    {
        $products = Product::where('price', '>', 1000000)->where('price', '<', 3000000)->get();
        if (isset($products)){      
            return view('PageStore.search', compact('products'));   
        }
        return view('PageStore.search'); 
    }
    
    //gia tu 3-6 trieu
    public function BaDen6Trieu()
    {
        $products = Product::where('price', '>', 3000000)->where('price', '<', 6000000)->get();
        if (isset($products)){         
          return view('PageStore.search', compact('products'));
        }      
        return view('PageStore.search');    
    }

    //gia tu 6-10 trieu
    public function SauDen10Trieu()
    {
        $products = Product::where('price', '>', 6000000)->where('price', '<', 10000000)->get();
        if (isset($products)){        
            return view('PageStore.search', compact('products'));
        }
        return view('PageStore.search');      
   }
    
    //gia tu 10-15 trieu
    public function muoiDen15Trieu()
    {
        $products = Product::where('price', '>', 10000000)->where('price', '<' , 15000000)->get();
        if (isset($products)){        
            return view('PageStore.search', compact('products'));
        }
        return view('PageStore.search'); 
   }
    
    //gia tu 15 trieu tro len
    public function tren15Trieu()
    {
        $products = Product::where('price', '>', 15000000)->get();
        if (isset($products)){              
            return view('PageStore.search', compact('products'));
        }
        return view('PageStore.search');      
    }
    // END tim Kiem
    
    //view details
   public function view_detail($id)
    {        
        $product = Product::find($id);
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

