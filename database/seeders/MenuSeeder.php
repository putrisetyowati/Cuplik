<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        Menu::create([
            'short' => '1',
            'name' => 'Sosial',
            'link' => 'news',
            'level' => '1',
            'is_active' => '1',
        ]);
    }
}
