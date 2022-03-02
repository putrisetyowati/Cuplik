<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling extends Model
{
    use HasFactory;

    public function polingJawaban()
    {
        return $this->belongsTo(polingJawaban::class, 'id_polingjawaban', 'id');
    }
}
