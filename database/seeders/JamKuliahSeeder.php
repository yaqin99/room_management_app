<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JamKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 1" , 
                'awal' => "07:30:00" , 
                'akhir' => "08:20:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 2" , 
                'awal' => "08:20:00" , 
                'akhir' => "09:10:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 3" , 
                'awal' => "09:15:00" , 
                'akhir' => "10:05:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 4" , 
                'awal' => "10:05:00" , 
                'akhir' => "10:55:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 5" , 
                'awal' => "11:00:00" , 
                'akhir' => "11:50:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 6" , 
                'awal' => "11:50:00" , 
                'akhir' => "12:40:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 7" , 
                'awal' => "13:15:00" , 
                'akhir' => "14:05:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 8" , 
                'awal' => "14:05:00" , 
                'akhir' => "14:55:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 9" , 
                'awal' => "14:55:00" , 
                'akhir' => "15:45:00" , 
                 
            ]
            );
        DB::table('jam__kuliahs')->insert(
            [
                'jam' => "Jam 10" , 
                'awal' => "15:45:00" , 
                'akhir' => "16:35:00" , 
                 
            ]
            );
    }
}
