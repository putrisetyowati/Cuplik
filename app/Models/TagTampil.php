<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTampil extends Model
{
    use HasFactory;

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'id_tag', 'id');
    }
}
