<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Umur;

class UmurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $umur = [
            [
                'umur' => '< 1 bulan',

            ],
            [
                'umur' => '1 - 2 bulan',

            ],
            [
                'umur' => '2 - 12 bulan',

            ],
        ];

        foreach ($umur as $key => $value) {
            Umur::create($value);
        }   
    }
}
