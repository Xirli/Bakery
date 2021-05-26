<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    public function newsPhotos()
    {
        return $this->hasMany(News_photo::class,'news_id', 'id');
    }
}
