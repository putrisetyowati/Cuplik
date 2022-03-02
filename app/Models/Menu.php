<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function content()
    {
        return $this->hasMany(Content::class);
    }

    public function polingMenu()
    {
        return $this->hasMany(PolingMenu::class);
    }

    public function tagTampil()
    {
        return $this->hasMany(TagTampil::class);
    }
}
