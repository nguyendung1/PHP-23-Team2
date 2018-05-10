<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Technology;

class Product extends Model
{
    use SoftDeletes;
    protected $table = 'products';

    protected $fillable = ['name', 'price', 'quality', 'description', 'image', 'category_id'];

    protected $dates = ['deleted_at'];
    
    public function category()
    {
    	return $this->belongsTo('App\Category');	
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment', 'product_id', 'id');
    }

    public function technology()
    {
    	return $this->hasMany('App\Technology', 'product_id', 'id');
    }
}
