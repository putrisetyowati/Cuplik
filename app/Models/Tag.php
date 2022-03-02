<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function tagNews()
    {
        return $this->hasMany(TagNews::class);
    }

    public function tagTampil()
    {
        return $this->hasMany(TagTampil::class);
    }
}
