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
                'id' => 'xx1',
                'jenis' => 'rempah'
            ],
            [
                'id' => 'xx3',
                'jenis' => 'kopi'
            ],
            [
                'id' => 'xx4',
                'jenis' => 'material'
            ]

        ]);
    }
}
