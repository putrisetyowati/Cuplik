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
            'is_active' => '1',
        ]);

        Menu::create([
            'short' => '2',
            'name' => 'Politik',
            'is_active' => '1',
        ]);
        
        Menu::create([
            'short' => '3',
            'name' => 'Hukum',
            'is_active' => '1',
        ]);

        Menu::create([
            'short' => '4',
            'name' => 'Ekonomi',
            'is_active' => '1',
        ]);

        Menu::create([
            'short' => '5',
            'name' => 'Ragam',
            'is_active' => '1',
        ]);

        Menu::create([
            'short' => '6',
            'name' => 'Luar Negeri',
            'is_active' => '1',
        ]);

        Menu::create([
            'short' => '7',
            'name' => 'Iptek',
            'is_active' => '1',
        ]);
    }
}
