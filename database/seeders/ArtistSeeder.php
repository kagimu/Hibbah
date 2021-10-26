<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::create([
            'name' => 'John Doe',
            'description' => 'doejohn@gmail.com',
            'image' => '1.jpg',
        ]);
    }
}
