<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            CreateUsersSeeder::class,
            kategoriSeeder::class,
            kategori2Seeder::class,
            BlogSeeder::class,
            pethouseSeeder::class,
            FoodSeeder::class,
            VaccineSeeder::class,
            UmurSeeder::class,
            BBSeeder::class,
        ]);
    }
    
}
