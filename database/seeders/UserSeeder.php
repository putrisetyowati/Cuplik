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
        $admin = User::create([
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

        $admin->assignRole('admin');


        $admin1 = User::create([
            'username' => 'Amel',
            'initial' => 'aml',
            'tmpt_lhr' => 'Indramayu',
            'tgl_lhr' => '2001-05-14',
            'phone' => '089888867880',
            'almt_domisili' => 'Indramayu',
            'pendidikan' => 'D3',
            'image' => 'foto.jpg',
            'total' => '1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');

        $editor1 = User::create([
            'username' => 'Agus',
            'initial' => 'Ags',
            'tmpt_lhr' => 'Bandung',
            'tgl_lhr' => '2001-09-20',
            'phone' => '08988885881',
            'almt_domisili' => 'Cikarang',
            'pendidikan' => 'D3',
            'image' => 'foto.jpg',
            'total' => '1',
            'email' => 'editor@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $editor1->assignRole('Editor');

        $editor2 = User::create([
            'username' => 'Sutono',
            'initial' => 'stn',
            'tmpt_lhr' => 'Indramayu',
            'tgl_lhr' => '2001-12-01',
            'phone' => '08988888543',
            'almt_domisili' => 'Indramayu',
            'pendidikan' => 'S1',
            'image' => 'foto.jpg',
            'total' => '1',
            'email' => 'editor2@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $editor2->assignRole('Editor');

        $editor3 = User::create([
            'username' => 'Alif',
            'initial' => 'Alf',
            'tmpt_lhr' => 'Papua',
            'tgl_lhr' => '2001-03-22',
            'phone' => '08988829440',
            'almt_domisili' => 'Majalengka',
            'pendidikan' => 'D3',
            'image' => 'foto.jpg',
            'total' => '1',
            'email' => 'editor3@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $editor1->assignRole('Editor');

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
