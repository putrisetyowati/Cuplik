<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';
    protected $primaryKey = 'id';

    public function subTag()
    {
        return $this->hasMany(SubTag::class);
    }

    public function news()
    {
        return $this->BelongsToMany(News::class);
    }
}

