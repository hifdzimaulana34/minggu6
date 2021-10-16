<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert
        ([
            'nim' => '2031710142',
            'name' => 'Mohammad Hifdzi Maulana',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '081235269618',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710072',
            'name' => 'NILA AYU SETYANINGRUM',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '085233641670',
        ]);
        DB::table('students')->insert
        ([
            'nim' => '2031710029',
            'name' => 'NISSA NURSABRINA',
            'class' => 'MI-2E',
            'department' => 'Jurusan Teknologi Informasi',
            'phone_number' => '085707503180',
        ]);
    }
}