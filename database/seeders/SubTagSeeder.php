<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubTag;

class SubTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        SubTag::create([
            'short' => '1',
            'id_menu' => '1',
            'id_tag' => '1',
            'is_active' => '1',
        ]);
    }
}

