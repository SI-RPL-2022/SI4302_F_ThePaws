<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = [
            [
                'nama' => 'Felibite Mother and Kitten',
                'kategori' => '2',
                'umur' => '2 - 12 bulan',
                'berat_badan' => '1.5 - 2.5 kg',
                'deskripsi' => 'Diperkaya dengan minyak salmon dan susu tinggi kalsium untuk masa pertumbuhan anak kucing serta masa hamil dan menyusui bagi induk.',
                'foto' => 'fellibite.png',
            ],
            [
                'nama' => 'Pro Plan Weight Loss. Sterilised',
                'kategori' => '2',
                'umur' => '> 12 bulan',
                'berat_badan' => '4.5 - 6.5 kg',
                'deskripsi' => 'Pakan kucing ini mengandung nutrisi seimbang untuk kucing yang baru disteril dan kucing yang terlalu gemuk.',
                'foto' => 'fellibite.png',
            ],
            [
                'nama' => 'Solid Gold. Indigo Moon',
                'kategori' => '2',
                'umur' => '> 12 bulan',
                'berat_badan' => '< 1.5 kg',
                'deskripsi' => 'Kandungan proteinnya yang tinggi juga membuatnya baik untuk anak kucing dan induknya.',
                'foto' => 'fellibite.png',
            ],
        ];
        foreach ($food as $key => $value) {
            Food::create($value);
        }
    }
}
