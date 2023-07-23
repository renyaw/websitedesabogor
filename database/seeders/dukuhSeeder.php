<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class dukuhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Soko 1',
            'rw' => '1'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Soko 2',
            'rw' => '2'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Bebekan',
            'rw' => '3'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Kedungan',
            'rw' => '4'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Gumpang',
            'rw' => '5'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Pulo',
            'rw' => '6'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Plumpung',
            'rw' => '7'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Bogor',
            'rw' => '8'
        ]);
        DB:: table('Dukuh')->insert([
            'nama_dukuh' => 'Tegal Kedungan',
            'rw' => '9'
        ]);
    }
}
