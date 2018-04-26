<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Technology;

class Product extends Model
{
    //

    protected $table='products';

    protected $fillable=['name','price','quality','description','image','category_id'];


    public function category()
    {
    	return $this->belongsTo('App\Category');	
    }

    public function technology()
    {
    	return $this->hasOne('App\Technology','product_id','id');
    }
}
