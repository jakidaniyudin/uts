<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'nama' => 'cengkeh',
                'code_jenis' => 'xx1',
                'deskripsi_view' => 'Untuk bumbu-makan',
                'desskripsi_detail' => 'Cengkeh adalah rempah yang biasa digunakan di kehidupan sehari-hari. Kita bisa menggunakan cengkeh untuk bumbu makanan hingga campuran di minuman agar rasanya lebih nikmat.',
                'stock' => 12,
                'foto' => 'cengkeh.png',
                'harga' => 2000000
            ],
            [
                'nama' => 'ketumbar',
                'code_jenis' => 'xx1',
                'deskripsi_view' => 'Untuk bumbu makan',
                'desskripsi_detail' => 'Cengkeh adalah rempah yang biasa digunakan di kehidupan sehari-hari. Kita bisa menggunakan cengkeh untuk bumbu makanan.',
                'stock' => 20,
                'foto' => 'ketumbar.png',
                'harga' => 20000000
            ],
            [
                'nama' => 'kopi barista',
                'code_jenis' => 'xx3',
                'deskripsi_view' => 'aroma yang maknyos',
                'desskripsi_detail' => 'Barista dan bartender sebenarnya memiliki arti yang sama, tapi identik dengan profesi yang berbeda. Sebab di Amerika Serikat pada saat itu, sebelum cafe atau coffee shop khas Italia merebak, ada banyak pub dan klub. Tempat-tempat ini memiliki bar yang menjual minum-minuman beralkohol yang diracik dan disajikan oleh bartender..',
                'stock' => 30,
                'foto' => 'barista.png',
                'harga' => 200000
            ],
            [
                'nama' => 'kopi luak',
                'code_jenis' => 'xx3',
                'deskripsi_view' => 'aman dilambung',
                'desskripsi_detail' => 'Kopi luwak diproduksi terutama di pulau Sumatra , Jawa , Bali , Sulawesi , dan di Timor Timur di Indonesia . Itu juga banyak dikumpulkan di hutan atau diproduksi di pertanian di pulau-pulau Filipina , [3] di mana produknya disebut kape motit di wilayah Cordillera, kapé alamíd di daerah Tagalog , kapé melô atau kapé musang di Mindanao, dan kahawa kubing di Kepulauan Sulu .',
                'stock' => 22,
                'foto' => 'luak.png',
                'harga' => 2000000
            ],
            [
                'nama' => 'batu bara',
                'code_jenis' => 'xx4',
                'deskripsi_view' => 'sumber pembangkit listrik',
                'desskripsi_detail' => 'Batu bara merupakan salah satu bahan bakar fosil. Pengertian umum dari batu bara adalah sebuah batuan sedimen yang bisa terbakar. Batu bara terbentuk dari endapat organic. Utamanya merupakan sisa-sisa dari tumbuhan. Kemudian terbentuk melalui proses pembatubaraan..',
                'stock' => 1000,
                'foto' => 'bara.png',
                'harga' => 2000000
            ],
            [
                'nama' => 'diamond',
                'code_jenis' => 'xx4',
                'deskripsi_view' => 'Untuk periasan',
                'desskripsi_detail' => 'material yang sangat langah dan mahal.',
                'stock' => 12,
                'foto' => 'diamond.png',
                'harga' => 9000000
            ]

        ]);
    }
}
