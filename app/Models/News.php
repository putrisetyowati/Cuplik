<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function counterNews()
    {
        return $this->hasMany(CounterNews::class); 
    }

    public function newsImage()
    {
        return $this->hasMany(newsImage::class); 
    }

    public function tagNews()
    {
        return $this->hasMany(TagNews::class); 
    }
}
