<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Category;
use App\OrderDetail;
use App\Order;
use Validator;
use Hash;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Schema::defaultStringLength(191);
        
        if(Schema::hasTable('categories')) {
             $categories=Category::all();
           view::share('categories',$categories);  
       }
        Validator::extend('password_old',function($attribute,$value,$parameters,$validator){
            return Hash::check($value,current($parameters));
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
