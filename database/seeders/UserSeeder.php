<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('users')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Sudipto Biswas',
                    'email' => 'sudipto397@gmail.com',
                    'email_verified_at' => '2021-11-01 11:11:11',
                    'password' => Hash::make("dev_Dipto"),
                    'created_at' => '2021-01-27 10:27:19',
                )
        ));
    }
}
