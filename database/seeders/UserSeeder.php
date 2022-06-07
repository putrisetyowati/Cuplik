<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $editor = User::create([
            'name' => 'Editor Role',
            'username' => 'putri',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $editor->assignRole('Editor');

        $member = User::create([
            'name' => 'Member Role',
            'username' => 'setyowati',
            'email' => 'member@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $member->assignRole('Member');

        $reporter = User::create([
            'name' => 'Reporter Role',
            'username' => 'scarlet',
            'email' => 'reporter@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $reporter->assignRole('Reporter');
    }
}
