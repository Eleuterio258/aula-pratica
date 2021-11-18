<?php

namespace App\Models;

use App\Models\OrderItem;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $table="orders";

    protected $fillable=[
        "user_id",
        "fname",
        "lname",
        "email",
        "phone",
        "address",
        "city",
        "province",
        "postalcode",
        "total_price",
        "tax",
        "iva",
];

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
}
