<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
       protected $table= 'comment';


       protected $fillable = ['name', 'product_id', 'content'];

       public function product()
       {
       	return $this->belongsTo('App\Product');
       }
}
