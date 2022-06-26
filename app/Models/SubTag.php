<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTag extends Model
{
    use HasFactory;

    protected $table = 'sub_tags';
    protected $primaryKey = 'id';

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu','id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class, 'id_tag','id');
    }
}
