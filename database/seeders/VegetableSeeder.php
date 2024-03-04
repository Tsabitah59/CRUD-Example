<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vegetables')->insert(array(
            array(
                'nama-sayur' => 'bayam',
                'harga' => '100000',
            ),

            array(
                'nama-sayur' => 'jagung',
                'harga' => '200000',
            ),

            array(
                'nama-sayur' => 'wortel',
                'harga' => '300000',
            ),
        ));
    }
}
