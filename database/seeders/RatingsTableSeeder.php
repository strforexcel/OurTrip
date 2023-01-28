<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Rating;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'wisata_id' => 1,
                'review' => 'keren bgt',
                'rating' => 5,
                'status' => 0,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'wisata_id' => 2,
                'review' => 'panas tempetnya',
                'rating' => 4,
                'status' => 0,
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'wisata_id' => 1,
                'review' => 'banyak sampah di tong sampah',
                'rating' => 2,
                'status' => 0,
            ]
        ]);
    }
}
