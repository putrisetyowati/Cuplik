<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagNews extends Model
{
    use HasFactory;

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'id_tag', 'id');
    }
  
    public function berita()
    {
        return $this->belongsTo(Berita::class, 'id_berita', 'id');
    }
}
