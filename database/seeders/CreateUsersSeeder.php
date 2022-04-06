<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'anggora',
               'email'=>'cat@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'cihuahua',
                'email'=>'dog@gmail.com',
                 'is_admin'=>'1',
                'password'=> bcrypt('12345678'),
             ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}   