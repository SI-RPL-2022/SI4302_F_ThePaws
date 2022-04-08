<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [
            [
                'nama' => 'Anjing',

            ],
            [
                'nama' => 'Kucing',

            ],
        ];

        foreach ($kategori as $key => $value) {
            Kategori::create($value);
        }
    }
}
