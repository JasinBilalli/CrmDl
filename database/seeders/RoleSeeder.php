<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            1 => 'admin',
            2 => 'backoffice',
            3 => 'salesmanager',
            4 => 'management',
            5 => 'finance',
            6 => 'digital',
            7 => 'fs'
         ];



        foreach($roles as $id => $role){
            Role::create([
                'id' => $id,
                'name' => $role,
                'guard_name' => 'admins'
            ]);
        }
    }
}
