<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineAdvertisement extends Model
{
    use HasFactory;

    protected $table = 'line_advertisements';
    protected $primaryKey = 'id';

}
