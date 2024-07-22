<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 , 
           'nama_ruangan' => 'KI.01',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Ruangan Paling Barat' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 , 
            'nama_ruangan' => 'KI.02',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Nomer Dua Dari Barat' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KI.03',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Nomer Dua Dari Timur' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KI.04',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Paling Timur' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KI.05',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Ruangan Paling Barat' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KI.06',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Nomer Dua Dari Barat' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KI.07',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Nomer Dua Dari Timur' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 1 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KI.08',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Paling Timur' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.01',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Paling Selatan' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.02',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Nomer Dua Dari Selatan' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.03',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Nomer Tiga Dari Selatan' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.04',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Nomer Tiga Dari Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.05',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Nomer Dua Dari Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KD.06',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Paling Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.07',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Paling Selatan' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KD.08',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Nomer Dua Dari Selatan' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KD.09',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Nomer Tiga Dari Selatan' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KD.10',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Nomer Tiga Dari Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 ,
            'gender_id' => 1 , 
           'nama_ruangan' => 'KD.11',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Nomer Dua Dari Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'KD.12',
           'lokasi'=> 'Lantai 2',
           'hint'=> 'Paling Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );
        DB::table('ruangans')->insert(
            [
            'kategori_id' => 4 , 
            'gender_id' => 1 ,
           'nama_ruangan' => 'Lab. ICT 1',
           'lokasi'=> 'Lantai 1',
           'hint'=> 'Lantai Dasar Bagian Utara' ,
           'kondisi'=> 'Baik' , 
           'keterangan'=> '' ,
           'status' => 'Terpakai',
            ]
            );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.01',
               'lokasi'=> 'Lantai 1',
               'hint'=> 'Paling Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );
            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.02',
               'lokasi'=> 'Lantai 1',
               'hint'=> 'Nomer Dua Dari Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.03',
               'lokasi'=> 'Lantai 1',
               'hint'=> 'Nomer Dua Dari Utara' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.04',
               'lokasi'=> 'Lantai 1',
               'hint'=> 'Paling Utara' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.05',
               'lokasi'=> 'Lantai 2',
               'hint'=> 'Paling Utara' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.06',
               'lokasi'=> 'Lantai 2',
               'hint'=> 'Nomer 2 Dari Utara' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );
            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.07',
               'lokasi'=> 'Lantai 2',
               'hint'=> 'Utara Tangga' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.08',
               'lokasi'=> 'Lantai 2',
               'hint'=> 'Selatan Tangga' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.09',
               'lokasi'=> 'Lantai 2',
               'hint'=> 'Nomer 2 Dari Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.10',
               'lokasi'=> 'Lantai 2',
               'hint'=> 'Paling Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.11',
               'lokasi'=> 'Lantai 3',
               'hint'=> 'Paling Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );
            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.12',
               'lokasi'=> 'Lantai 3',
               'hint'=> 'Nomer Dua Dari Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );
            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.13',
               'lokasi'=> 'Lantai 3',
               'hint'=> 'Selatan Tangga' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );
            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.14',
               'lokasi'=> 'Lantai 3',
               'hint'=> 'Utara Tangga' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.15',
               'lokasi'=> 'Lantai 3',
               'hint'=> 'Nomer 2 Dari Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );
            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'KB.16',
               'lokasi'=> 'Lantai 3',
               'hint'=> 'Paling Selatan' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

            DB::table('ruangans')->insert(
                [
                'kategori_id' => 3 , 
                'gender_id' => 2 ,
               'nama_ruangan' => 'Lab. ICT',
               'lokasi'=> 'Lantai 1',
               'hint'=> 'Utara Tangga' ,
               'kondisi'=> 'Baik' , 
               'keterangan'=> '' ,
               'status' => 'Terpakai',
                ]
                );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.01',
                   'lokasi'=> 'Lantai 1',
                   'hint'=> 'Paling Selatan' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.02',
                   'lokasi'=> 'Lantai 1',
                   'hint'=> 'Nomer Dua Dari Selatan' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.03',
                   'lokasi'=> 'Lantai 1',
                   'hint'=> 'Selatan Tangga' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.05',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Paling Utara' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.06',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Nomer Dua Dari Utara' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.07',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Utara Tangga' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.08',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Selatan Tangga' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.09',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Nomer Dua Dari Selatan' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.10',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Paling Selatan ' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.11',
                   'lokasi'=> 'Lantai 3',
                   'hint'=> 'Paling Utara' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.12',
                   'lokasi'=> 'Lantai 3',
                   'hint'=> 'Nomer Dua Dari Utara' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.13',
                   'lokasi'=> 'Lantai 3',
                   'hint'=> 'Utara Tangga' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.14',
                   'lokasi'=> 'Lantai 3',
                   'hint'=> 'Selatan Tangga' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.15',
                   'lokasi'=> 'Lantai 3',
                   'hint'=> 'Nomer Dua Dari Selatan' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );
                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 2 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'KA.16',
                   'lokasi'=> 'Lantai 3',
                   'hint'=> 'Paling Selatan' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 6 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'Lab. Kimia',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Kantor IST' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 6 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'Lab. Biologi',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Kantor IST' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );

                DB::table('ruangans')->insert(
                    [
                    'kategori_id' => 6 , 
                    'gender_id' => 2 ,
                   'nama_ruangan' => 'Lab. ICT 2',
                   'lokasi'=> 'Lantai 2',
                   'hint'=> 'Kantor IST' ,
                   'kondisi'=> 'Baik' , 
                   'keterangan'=> '' ,
                   'status' => 'Terpakai',
                    ]
                    );


                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.01',
                       'lokasi'=> 'Lantai 1',
                       'hint'=> 'Utara Paling Timur' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );

                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.02',
                       'lokasi'=> 'Lantai 1',
                       'hint'=> 'Utara Nomer Dua Dari Timur' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.03',
                       'lokasi'=> 'Lantai 1',
                       'hint'=> 'Selatan Barat Tangga' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.04',
                       'lokasi'=> 'Lantai 1',
                       'hint'=> 'Selatan Timur Tangga' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.05',
                       'lokasi'=> 'Lantai 2',
                       'hint'=> 'Utara Paling Timur' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );

                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.06',
                       'lokasi'=> 'Lantai 2',
                       'hint'=> 'Utara Nomer Dua Dari Timur' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.07',
                       'lokasi'=> 'Lantai 2',
                       'hint'=> 'Selatan Barat Tangga' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.08',
                       'lokasi'=> 'Lantai 2',
                       'hint'=> 'Selatan Timur Tangga' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );

                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.09',
                       'lokasi'=> 'Lantai 3',
                       'hint'=> 'Selatan Barat Tangga' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
                    DB::table('ruangans')->insert(
                        [
                        'kategori_id' => 5 , 
                        'gender_id' => 1 ,
                       'nama_ruangan' => 'RU.10',
                       'lokasi'=> 'Lantai 3',
                       'hint'=> 'Selatan Timur Tangga' ,
                       'kondisi'=> 'Baik' , 
                       'keterangan'=> '' ,
                       'status' => 'Terpakai',
                        ]
                        );
    }
}
