<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['id', 'name', 'user_id', 'phone_number', 'address', 'total', 'date_order', 'note'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }    

    public function order_detail()
    {
    	return $this->hasOne('App\OrderDetail');
    }

}
