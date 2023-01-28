<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_wisatas')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'tanggal_upload' => Carbon::parse('1-1-2023'),
                'angka_review' => 4,
                'deskripsi_review' => 'Raja Ampat gada obat!'
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'tanggal_upload' => Carbon::parse('3-1-2023'),
                'angka_review' => 5,
                'deskripsi_review' => 'Ini lokasinya cakep banget, jangan lupa pake sunscreen karena panas bgt!'
            ],
            [
                'id' => 3,
                'user_id' => 2,
                'tanggal_upload' => Carbon::parse('19-1-2023'),
                'angka_review' => 5,
                'deskripsi_review' => 'Labuan bajo emang hidden paradisenya Indonesia!'
            ],
        ]);
    }
}
