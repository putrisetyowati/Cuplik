<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'title' => 'Baner Atas Samping Logo',
            'lebar' => '850',
            'tinggi' => '80',
            'is_active' => '1',
        ]);
    }
}
