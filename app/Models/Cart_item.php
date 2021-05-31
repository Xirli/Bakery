<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_item extends Model
{
    use HasFactory;
    public function order(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
