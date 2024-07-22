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
        DB::table('admins')->insert(
            [
                'nama' => "Admin" , 
                'alamat' => "jl. Luk Ghuluk" , 
                'noHp' => "088222333444666" , 
                'email' => "admin@gmail.com" , 
                'username' => "admin" , 
                'password' => bcrypt('admin') , 
            ]
            );
    }
}
