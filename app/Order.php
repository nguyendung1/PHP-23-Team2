<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{ 
    protected $table = 'orders';

    protected $fillable = ['id', 'name', 'user_id', 'phone_number', 'address', 'total', 'date_order', 'note','status'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }    

    public function orderDetail()
    {
        return $this->hasMany('App\OrderDetail', 'order_id', 'id');
    }
}
