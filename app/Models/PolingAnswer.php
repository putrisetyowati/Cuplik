<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolingAnswer extends Model
{
    use HasFactory;

    protected $table = 'poling_answers';
    protected $primaryKey = 'id';

}
