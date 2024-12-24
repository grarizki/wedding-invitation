<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            'wedding_id'        => 1,
            'gallery1'          => '',
            'gallery2'          => '',
            'gallery3'          => '',
            'gallery4'          => '',
            'gallery5'          => '',
            'gallery6'          => '',
            'video'             => '',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
