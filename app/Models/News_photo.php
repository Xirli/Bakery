<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News_photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'news_id',
        'photo'

    ];
    public function news(){
        return $this->belongsTo(News::class, 'news_id', 'news_id');
    }
}
