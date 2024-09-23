<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;//Para encryptar

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('users')->insert([
        'name'=>'Administrador P',
        'email'=>'admin_p@gmail.com',
        'password'=>Hash::make('123'),
        'img_profile'=>'defalult.jpg',
        'id_zone'=>4
    ]);
    DB::table('users')->insert([
        'name'=>'Administrador C',
        'email'=>'admin_c@gmail.com',
        'password'=>Hash::make('123'),
        'img_profile'=>'defalult.jpg',
        'id_zone'=>3
    ]);
    DB::table('users')->insert([
        'name'=>'Administrador S',
        'email'=>'admin_S@gmail.com',
        'password'=>Hash::make('123'),
        'img_profile'=>'defalult.jpg',
        'id_zone'=>5
    ]);
    }
}
