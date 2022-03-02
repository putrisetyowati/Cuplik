<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolingSoal extends Model
{
    use HasFactory;

    public function polingMenu()
    {
        return $this->hasMany(PolingMenu::class);
    }
}
