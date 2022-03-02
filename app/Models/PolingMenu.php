<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolingMenu extends Model
{
    use HasFactory;

    public function polingSoal()
    {
        return $this->belongsTo(PolingSoal::class, 'id_polingsoal', 'id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu', 'id');
    }
}
