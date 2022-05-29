<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\Umur;
use App\Models\BB;
use Faker\Generator as Faker;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $umurs = DB::table('umur')->pluck('id');
        $bbs = DB::table('bb')->pluck('id');
        $food = [
            [
                'nama' => 'Felibite Mother and Kitten',
                'kategori' => '2',
                'umur' => $umurs->random(),
                'berat_badan' => $bbs->random(),
                'deskripsi' => 'Diperkaya dengan minyak salmon dan susu tinggi kalsium untuk masa pertumbuhan anak kucing serta masa hamil dan menyusui bagi induk.',
                'foto' => 'fellibite.png',
            ],
            [
                'nama' => 'Pro Plan Weight Loss. Sterilised',
                'kategori' => '2',
                'umur' => $umurs->random(),
                'berat_badan' => $bbs->random(),
                'deskripsi' => 'Pakan kucing ini mengandung nutrisi seimbang untuk kucing yang baru disteril dan kucing yang terlalu gemuk.',
                'foto' => 'fellibite.png',
            ],
            [
                'nama' => 'Solid Gold. Indigo Moon',
                'kategori' => '2',
                'umur' => $umurs->random(),
                'berat_badan' => $bbs->random(),
                'deskripsi' => 'Kandungan proteinnya yang tinggi juga membuatnya baik untuk anak kucing dan induknya.',
                'foto' => 'fellibite.png',
            ],
        ];
        foreach ($food as $key => $value) {
            Food::create($value);
        }
    }
}
