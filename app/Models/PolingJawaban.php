<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolingJawaban extends Model
{
    use HasFactory;

    public function poling()
    {
        return $this->belongsTo(Poling::class, 'id_polingjawaban', 'id');
    }
}
