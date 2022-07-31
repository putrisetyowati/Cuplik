<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageAdvertisement extends Model
{
    use HasFactory;

    protected $table = 'image_advertisements';
    protected $primaryKey = 'id';

    public function posisi()
    {
        return $this->belongsTo(Position::class, 'id_posisi','id');
    }
}
