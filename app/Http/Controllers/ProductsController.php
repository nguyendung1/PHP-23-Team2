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
    /*
    public function save_update_product(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $category = Category::all();
        $this->validate($request,
            [
                'name' => 'required|min:10:max:50',
                'price' => 'required',
                'quality' => 'required|min:1|max:5',
                'description' => 'required|max:100|min:10',
                'category' => 'required'
            ],
            [
                'name.required'=>'You must type name product',
                'name.max'=>'Name must be greater than or equal to 50 and greater than 10 character',
                'name.min'=>'Name must be greater than or equal to 50 and greater than 10 character',
                'quality.required'=>'You must type quality',
                'quality.max'=>'Quality must be greater than or equal to 5 and greater than 0',
                'quality.min'=>'Quality must be greater than or equal to 5 and greater than 0',
                'description.required'=>'You must type description',
                'description.max'=>'Description must be greater than or equal to 100 and greater than 10',
                'description.min'=>'Description must be greater than or equal to 100 and greater than 10',
                'category.required'=>'You must choose Category'
            ]);
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quality = $request->quality;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->save();
        return redirect('admin/product/product_list')->with('thongbao_update','Update Successful');
    }
    */

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

    /*public function save_add_product(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:10:max:50',
                'price' => 'required',
                'quality' => 'required|min:1|max:5',
                'description' => 'required|max:100|min:10',
                'category' => 'required',
                'picture' => 'required'
            ],
            [
                'name.required'=>'You must type name product',
                'name.max'=>'Name must be greater than or equal to 50 and greater than 10 character',
                'name.min'=>'Name must be greater than or equal to 50 and greater than 10 character',
                'quality.required'=>'You must type quality',
                'quality.max'=>'Quality must be greater than or equal to 5 and greater than 0',
                'quality.min'=>'Quality must be greater than or equal to 5 and greater than 0',
                'description.required'=>'You must type description',
                'description.max'=>'Description must be greater than or equal to 100 and greater than 10',
                'description.min'=>'Description must be greater than or equal to 100 and greater than 10',
                'category.required'=>'You must choose Category',
                'picture.required'=>'You must update picture'
            ]);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quality = $request->quality;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->picture = $request->picture;
        $product->save();
        return redirect('admin/product/product_list')->with('thongbao_add', 'Add Successful');
    }
    */

    public function SaveAddProduct(Request $request)
    {
        $data = Input::all();
        $product = Product::create($data);
        return redirect('admin/product/product_list')->with('thongbao_add', 'Add Successful'); 
    }

    public function SearchProduct(Request $request)
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

