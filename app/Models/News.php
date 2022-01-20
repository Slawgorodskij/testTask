<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory;
    # для реализации мягкого удаления
    //use SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'news_body',
    ];

    public function category()
    {
     return $this->belongsTo(Category::class);
    }
}
