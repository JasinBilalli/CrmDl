<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admins = [
           1 => ['name' => 'admin','email' => 'admin@gmail.com', 'password' => Hash::make('123456')],
           2 => ['name' => 'backoffice','email' => 'backoffice@gmail.com', 'password' => Hash::make('123456')],
           3 => ['name' => 'salesmanager', 'email' => 'salesmanager@gmail.com', 'password' => Hash::make('123456')],
           4 => ['name' => 'fs1','email' => 'fs1@gmail.com', 'password' => Hash::make('123456')],
           5 => ['name' => 'fs2','email' => 'fs2@gmail.com', 'password' => Hash::make('123456')],
           6 => ['name' => 'fs3','email' => 'fs3@gmail.com', 'password' => Hash::make('123456')],
           7 => ['name' => 'fs4','email' => 'fs4@gmail.com', 'password' => Hash::make('123456')],
           8 => ['name' => 'digital','email' => 'digital@gmail.com', 'password' => Hash::make('123456')],

       ];
       foreach($admins as $id => $admin){
           Admins::create([
       
        
               'name' => $admin['name'],
               'email' => $admin['email'],
               'password' => $admin['password']
           ]);
       }
        
    }
}

