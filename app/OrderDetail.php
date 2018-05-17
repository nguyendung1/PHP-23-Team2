<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';

    protected $fillable = ['id', 'order_id', 'product_id', 'quantity', 'price'];

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }

    public function product()
    {
    	return $this->hasOne('App\Product', 'id', 'product_id');
    }
}
