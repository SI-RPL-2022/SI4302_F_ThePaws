<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vaccine;
use Illuminate\Support\Facades\DB;

class VaccineSeeder extends Seeder
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
        $vaccine = [
            [
                'nama' => 'Tetracat',
                'kategori' => '2',
                'umur' => $umurs->random(),
                'berat_badan' => $bbs->random(),
                'deskripsi' => 'Feline panleucopenia, Feline rhinotracheitis, Felina calicivirus dan juga Clamydia',
            ],
            [
                'nama' => 'Rabies',
                'kategori' => '2',
                'umur' => $umurs->random(),
                'berat_badan' => $bbs->random(),
                'deskripsi' => 'Vaksin ini sangat penting karena virus rabies akan menyerang kekebalan tubuh kucing dan dapat menularkan pada siapa pun',
            ],
        ];
        foreach ($vaccine as $key => $value) {
            Vaccine::create($value);
        }
    }
}
