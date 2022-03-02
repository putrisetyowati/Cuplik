<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CounterNews extends Model
{
    use HasFactory;

    public function news()
    {
        return $this->belongsTo(News::class, 'id_berita', 'id'); 
    }
}
