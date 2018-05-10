<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\OrderDetail;
use App\User;
use App\Technology;
use App\Comment;

use Illuminate\Support\Facades\Auth;
class ProductsController extends Controller
{
//Client Site
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
           if ($request->has('search')) { 
           $query = Product::query(); 
          $searchQuery = $request->search;
          $query = Product::whereHas('category', function($query) use ($searchQuery) {
                $query->where('name', 'like', '%' . $searchQuery . '%' ); 
           })
           ->orWhere('name', 'like', '%' . $searchQuery . '%');
          }
           $products = $query->paginate(12)->appends(request()->query());
           return view('PageStore.search', compact('products'));      
    }

    //tiem san pham duoi tren gia tien
    //chung vao 1 funnction  nhan 2 param va sua lai ten 
     public function searchFollowPrice($price1,$price2)
     {
         if ($price2 <= 1000000){
            $products = Product::where('price', '<', 1000000);
             
         }
         else if ($price1 < 1000110 && $price1 < $price2){ 
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2);
             
         }
         else if($price1 <3000100 && $price1 < $price2){
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2);
            
         }
         else if($price1 <6000100 && $price1 < $price2){
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2);
            
         }
         else if($price1 <10000100 && $price1 < $price2){
            $products = Product::where('price', '>', $price1)->where('price', '<', $price2);
           
         }
         else if($price1 <15000100 && $price1 < $price2){
            $products = Product::where('price','>', $price1)->where('price', '<', $price2);
           
         }
         $products = $products->paginate(12);
         return view('PageStore.search' , compact('products'));

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
    
 //comment 

    public function comment(Request $request)
    {

         if (Auth::check()) {
             $data['name'] = Auth::user()->name;
             $data['product_id'] = $request->id;
             $data['content'] = $request->content;
             $comments = Comment::create($data);
             
             
             return back();       
         }
         return back()->with('status', 'Đăng nhập mới có thể bình luận.');

    }

//ADMIN SITE 
    
    //Order
    public function ListOrder()
    {
        $order = Order::all();          
        $value_price = OrderDetail::sum('price');
        $value_quantity = OrderDetail::sum('quantity');
        return view('PagesAdmin.orders.list_order', compact('order', 'value_price', 'value_quantity'));       
    }

    public function PendingOrder()
    {
        $order = OrderDetail::where('status', 0)->get();
        $value_price = OrderDetail::sum('price');
        $value_quantity = OrderDetail::sum('quantity');        
        return view('PagesAdmin.orders.pending_order', compact('order', 'value_price', 'value_quantity'));     
    }

    public function SearchAdmin(Request $request)
    {
        $search = $request->search;
        $user = User::where('name', '=', $search)->first();
        if (isset($user)){   
            $order = $user->Orders()->get();
            return view('PagesAdmin.orders.search_order', compact('search', 'order', 'user'));
        }
        if ($search == 'Pending' or $search == 'pending'){
            $order = OrderDetail::where('status', 0)->get();          
            return view('PagesAdmin.orders.pending_order', compact('order'));            
        }       
        if (empty($search)){
            return view('PagesAdmin.orders.not_found');     
        }
        $order = Order::where('id', 'like', $search)->orWhere('date_order', 'like', '%' .$search. '%')->get();
        return view('PagesAdmin.orders.search_order', compact('search', 'order', 'user'));   
    }

    public function DeleteOrder($id)
    {
        $order = Order::findorfail($id);
        $order->delete();
        return redirect('admin/order/order_list')->with('thongbao_delete', 'Delete Successful');
    } 

    //Product
    public function ListProduct()
    {
        $products = Product::all();                    
        return view('PagesAdmin.product.list_product', compact('products'));
    }  

    public function UpdateProduct($id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        return view('PagesAdmin.product.update_product', compact('product', 'category'));
    }


    public function SaveUpdateProduct($id)
    {
        $product = Product::findOrFail($id); 
        $data = Input::get();
        $product->update($data);
        return redirect('admin/product/product_list')->with('thongbao_update','Update Successful');
    }

    public function DeleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('admin/product/product_list')->with('thongbao_delete', 'Delete Successful');
    }     
    
    public function AddProduct()
    {
        $product = Product::all();
        $category = Category::all();
        return view('PagesAdmin.product.add_product', compact('product', 'category'));
    }


    public function SaveAddProduct(Request $request)
    {
        $data = Input::all();
        $product = Product::create($data);
        return redirect('admin/product/product_list')->with('thongbao_add', 'Add Successful'); 
    }

    public function SearchProductAdmin(Request $request)
    {
        $search = $request->search;
        if (empty($search)){
            return view('PagesAdmin.orders.not_found');     
        }
        $category = Category::where('name', 'like', '%' .$search. '%')->first();
        if (isset($category)){   
            $products = $category->products()->get();          
            return view('PagesAdmin.product.search_product', compact('search', 'products', 'category'));
        }
        $products = Product::where('name', 'like', '%' .$search. '%')->get();
        return view('PagesAdmin.product.search_product', compact('products', 'search'));
    }
}
