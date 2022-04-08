<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori2;

class Kategori2Seeder extends Seeder
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
                'nama' => 'Penyakit',

            ],
            [
                'nama' => 'Perawatan',

            ],
            [
                'nama' => 'First Aid',

            ],
        ];

        foreach ($kategori as $key => $value) {
            Kategori2::create($value);
        }
    }
}
