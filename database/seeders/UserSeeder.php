<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'Andi',
                'email' => 'andi@gmail.com',
                'password' => bcrypt('andi123')
            ],
            [
                'id' => 2,
                'username' => 'Budi',
                'email' => 'budi@gmail.com',
                'password' => bcrypt('budi123')
            ],
        ]);
    }
}
