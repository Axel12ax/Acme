<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlansSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plans')->insert([
            'name'=>'Casa',
            'page'=>15,
            'address'=>'CDMX',
            'id_zone'=>4,
            'id_user'=>1,
            'date_update'=>date('Y-m-d'),
            'date_previus'=>date('Y-m-d')

        ]);
        DB::table('plans')->insert([
            'name'=>'Edificio',
            'page'=>14,
            'address'=>'CDMX',
            'id_zone'=>3,
            'id_user'=>2,
            'date_update'=>date('Y-m-d'),
            'date_previus'=>date('Y-m-d')
        ]);
        DB::table('plans')->insert([
            'name'=>'Puente',
            'page'=>14,
            'address'=>'Chiapas',
            'id_zone'=>5,
            'id_user'=>3,
            'date_update'=>date('Y-m-d'),
            'date_previus'=>date('Y-m-d')
        ]);
    }
}
