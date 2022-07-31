<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    protected $primaryKey = 'id';

    public function subTag()
    {
        return $this->hasMany(SubTag::class);
    }


    public function news()
    {
        return $this->hasMany(News::class);
    }
}
