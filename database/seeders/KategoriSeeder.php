<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategoris')->insert(
            [
                'nama_kategori' => "Gedung Kiai Ilyas" , 
                
            ]
            );
        DB::table('kategoris')->insert(
            [
                'nama_kategori' => "Gedung Kiai Abdullah Sajjad" , 
                
            ]
            );
        DB::table('kategoris')->insert(
            [
                'nama_kategori' => "Gedung Kiai Bukhari" , 
                
            ]
            );
        DB::table('kategoris')->insert(
            [
                'nama_kategori' => "Gedung Kiai Idris" , 
                
            ]
            );
        DB::table('kategoris')->insert(
            [
                'nama_kategori' => "Ruang Rusunawa" , 
                
            ]
            );
        DB::table('kategoris')->insert(
            [
                'nama_kategori' => "Gedung Rektorat Universitas Annuqayah" , 
                
            ]
            );
       
    }
}
