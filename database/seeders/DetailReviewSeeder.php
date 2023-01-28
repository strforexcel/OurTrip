<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_reviews')->insert([
            [
                'detail_id' => 1,
                'review_id' => 1,
            ],
            [
                'detail_id' => 2,
                'review_id' => 2,
            ],
            [
                'detail_id' => 1,
                'review_id' => 3,
            ],
        ]);
    }
}
