<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(KontakSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(SubTagSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(DisclaimerSeeder::class);
        $this->call(PedomanSeeder::class);
        $this->call(RedaksiSeeder::class);
        $this->call(ImageAdvertisementSeeder::class);
        $this->call(LineAdvertisementSeeder::class);
    }
}
