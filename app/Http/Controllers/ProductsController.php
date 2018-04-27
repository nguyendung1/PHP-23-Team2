<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Technology;
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

   public function search(Request $request)
   {
      $value = $request->search;

      if (isset($value)) 
          {
              
              $product= Product::where('name',$value)->first();
              if (isset($product)) 
                 {
                    $category=Category::where('id',$product->category_id)->first();
                 
                    return view('PageStore.search',compact('product','category'));
                  }
                else 
                 {
                    return view('PageStore.search');
                 }     
          }
                    
   }

   //tiem san pham duoi tren gia tien

   public function duoi_1_trieu()
   {
      $product=Product::where('price','<',1000000)->first();    
     
      if (isset($product)) 
      {
        $category=Category::where('id',$product->category_id)->first();
        return view('PageStore.search',compact('product','category'));
      }
       else{return view('PageStore.search');}
   }

   public function MotDen3Trieu()
   {
        $products=Product::where('price','>',1000000)->where('price','<',3000000)->get();

        if (isset($products)) 
        {

             return view('PageStore.search',compact('products'));   
        }
        else
          {return view('PageStore.search');}
   
   }
   //gia tu 3-6 trieu
    public function BaDen6Trieu()
   {
        $products=Product::where('price','>',3000000)->where('price','<',6000000)->get();

        if (isset($products)) 
        {
          
             return view('PageStore.search',compact('products'));

        }
         else
          {return view('PageStore.search');}

        
   }

    //gia tu 6-10 trieu
    public function SauDen10Trieu()
   {
        $products=Product::where('price','>',6000000)->where('price','<',10000000)->get();

        if (isset($products)) 
        {
            
             return view('PageStore.search',compact('products'));
        }
         else{return view('PageStore.search');}

        
   }
    //gia tu 10-15 trieu
    public function muoiDen15Trieu()
   {
        $products=Product::where('price','>',10000000)->where('price','<',15000000)->get();

        if (isset($products)) 
        {
             return view('PageStore.search',compact('products'));

        }
         else{return view('PageStore.search');}

        
   }
      //gia tu 15 trieu tro len

      public function tren15Trieu()
   {
        $products=Product::where('price','>',15000000)->get();

        if (isset($products)) 
        {
          
             return view('PageStore.search',compact('products'));
        }
         else{return view('PageStore.search');}

        
  }

  // END tim Kiem

  //view details
 

   public function view_detail($id)
   {   
        
       $product=Product::find($id);

       $category=Category::find($product->category_id);
      
       $technology=$product->technology()->first();
      
      
      return view('PageStore.single',compact('product','technology','category'));
  
    }
    public function getDangky(){

      return view('PageStore.dangki');
    }
    public function postDangKy(Request $request){
        $data = $request->all();
        $data['is_admin'] = 1;
        User::create($data);
    }

}

