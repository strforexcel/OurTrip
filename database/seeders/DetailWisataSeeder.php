<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_wisatas')->insert([
            [
                'id' => 1,
                'nama_tempat' => 'Raja Ampat',
                'lokasi' => 'West Papua, Indonesia',
                'foto' => 'rajaampat.jpg',
                'deskripsi' => 'The beauty of the underwater scenery is the main attraction of this island at the eastern tip of Indonesia.'
            ],
            [
                'id' => 2,
                'nama_tempat' => 'Labuan Bajo',
                'lokasi' => 'East Nusa Tenggara, Indonesia',
                'foto' => 'labuanbajo.jpeg',
                'deskripsi' => 'Labuan Bajo is known as a hidden paradise in eastern Indonesia.'
            ],
            [
                'id' => 3,
                'nama_tempat' => 'Komodo National Park',
                'lokasi' => 'East Nusa Tenggara, Indonesia',
                'foto' => 'komodo.jpg',
                'deskripsi' => 'These volcanic islands are inhabited by a population of around 5,700 giant lizards, whose appearance and aggressive behaviour have led to them being called Komodo dragons.'
            ],
            [
                'id' => 4,
                'nama_tempat' => 'Bunaken National Park',
                'lokasi' => 'North Sulawesi, Indonesia',
                'foto' => 'bunaken.jpg',
                'deskripsi' => 'The park is located near the centre of the Coral Triangle, providing habitat to 390 species of coral as well as many fish, mollusc, reptile and marine mammal species.'
            ],
            [
                'id' => 5,
                'nama_tempat' => 'Wakatobi Island',
                'lokasi' => 'Southeast Sulawesi, Indonesia',
                'foto' => 'wakatobi.jpg',
                'deskripsi' => 'The name of Wakatobi is a portmanteau of the four main Tukangbesi Islands: Wangi-wangi, Kaledupa, Tomia, and Binongko.'
            ],
            [
                'id' => 6,
                'nama_tempat' => 'Gili Trawangan',
                'lokasi' => 'West Nusa Tenggara, Indonesia',
                'foto' => 'gili-trawangan-foto.jpg',
                'deskripsi' => 'Gili Trawangan is the largest of the three small islands or commonly referred to as gili in the northwest part of Lombok.'
            ],
            [
                'id' => 7,
                'nama_tempat' => 'Mount Bromo',
                'lokasi' => 'East Java, Indonesia',
                'foto' => 'bromo.jpg',
                'deskripsi' => 'At 2,329 meters it is not the highest peak of the massif, but the most famous.'
            ],
        ]);
    }
}
