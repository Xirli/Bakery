<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'father_name',
        'phone',
        'address',
        'email',
        'price',
        'pay',
    ];
    public function cart_items()
    {
        return $this->hasMany(Cart_item::class,'order_id', 'id');
    }
}
