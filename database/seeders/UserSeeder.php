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
            'username' => 'Putri',
            'initial' => 'ptr',
            'tmpt_lhr' => 'Cirebon',
            'tgl_lhr' => '2001-09-20',
            'phone' => '08988885881',
            'almt_domisili' => 'Cikarang',
            'pendidikan' => 'D3',
            'image' => 'foto.jpg',
            'total' => '1',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $editor->assignRole('admin');

        $editor2 = User::create([
            'username' => 'Bagol',
            'initial' => 'bgl',
            'tmpt_lhr' => 'Toang',
            'tgl_lhr' => '2001-09-20',
            'phone' => '08988885881',
            'almt_domisili' => 'Cikarang',
            'pendidikan' => 'D3',
            'image' => 'foto.jpg',
            'total' => '1',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $editor2->assignRole('Editor');

        // $admin = User::create([
        //     'username' => 'Scarlet',
        //     'initial' => 'scr',
        //     'tmpt_lhr' => 'Manokwari',
        //     'tgl_lhr' => '2002-09-20',
        //     'phone' => '08988885882',
        //     'almt_domisili' => 'Indramayu',
        //     'pendidikan' => 'D3',
        //     'image' => 'foto.jpg',
        //     'total' => '1',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        // $admin->assignRole('admin');
    }
}
