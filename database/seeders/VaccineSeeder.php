<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccine;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccine = [
            [
                'nama' => 'Tetracat',
                'kategori' => '2',
                'umur' => '2 - 12 bulan',
                'berat_badan' => '1.5 - 2.5 kg',
                'deskripsi' => 'Feline panleucopenia, Feline rhinotracheitis, Felina calicivirus dan juga Clamydia',
            ],
            [
                'nama' => 'Rabies',
                'kategori' => '2',
                'umur' => '> 12 bulan',
                'berat_badan' => '< 2 bulan',
                'deskripsi' => 'Vaksin ini sangat penting karena virus rabies akan menyerang kekebalan tubuh kucing dan dapat menularkan pada siapa pun',
            ],
        ];
        foreach ($vaccine as $key => $value) {
            Vaccine::create($value);
        }
    }
}
