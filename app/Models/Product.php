<?php

namespace App\Models;

use DGvai\Review\Review;
use DGvai\Review\Reviewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Reviewable;
    use HasFactory;
    public function cart_item(){
        return $this->belongsTo(Cart_item::class, 'product_id', 'id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function productPhotos()
    {
        return $this->hasMany(Product_photo::class,'product_id', 'id');
    }
    public function rating()
    {
        return $this->hasMany(Review::class,'product_id', 'model_id');
    }
}
