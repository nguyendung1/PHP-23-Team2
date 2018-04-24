<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
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
  
   



}
