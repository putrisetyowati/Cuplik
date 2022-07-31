<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ImageAdvertisement;

class ImageAdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ImageAdvertisement::create([
            'id_posisi' => '1',
            'title' => 'iklan-minuman',
            'image' => 'iklan-minuman.jpg',
             ]); 

    }
}
