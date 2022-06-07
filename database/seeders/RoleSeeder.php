<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Role::create([
            'name' => 'Editor',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Member',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'Reporter',
            'guard_name' => 'web'
        ]);
    }
}
