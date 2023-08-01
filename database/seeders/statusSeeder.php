<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('status')->insert([
            'id_status'=> 1,
            'proses'=> 'Dalam Proses',

        ]);
        DB:: table('status')->insert([
            'id_status'=> 2,
            'proses'=> 'Diterima',

        ]);
        DB:: table('status')->insert([
            'id_status'=> 3,
            'proses'=> 'Ditolak',

        ]);
    }
}
