<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genders')->insert(
            [
                'nama_gender' => "Putra" , 
                 
            ]
            );
        DB::table('genders')->insert(
            [
                'nama_gender' => "Putri" , 
                 
            ]
            );
        DB::table('genders')->insert(
            [
                'nama_gender' => "Umum" , 
                 
            ]
            );
    }
}
