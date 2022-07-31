<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $primaryKey = 'id';

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu','id');
    }


    public function tag()
    {
        return $this->BelongsToMany(Tag::class, 'tagnews', 'id_tag', 'id_news');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
