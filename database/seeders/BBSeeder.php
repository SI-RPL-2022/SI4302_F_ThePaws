<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BB;


class BBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bb = [
            [
                'bb' => '< 1.5 kg',

            ],
            [
                'bb' => '1.5 - 4.5 kg',

            ],
            [
                'bb' => '4.5 - 6.5 kg',

            ],
        ];

        foreach ($bb as $key => $value) {
            BB::create($value);
        }   
    }
}
