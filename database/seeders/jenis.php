<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class jenis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            [
                'id_kode' => 'xx1',
                'jenis' => 'rempah'
            ],
            [
                'id_kode' => 'xx3',
                'jenis' => 'kopi'
            ],
            [
                'id_kode' => 'xx4',
                'jenis' => 'material'
            ]

        ]);
    }
}
