<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::create([
            'wedding_id'        => 1,
            'name'              => 'Rumah Raka',
            'address'           => 'Jl. Peninggaran Barat 4 No. 46, Jakarta Selatan, Jakarta, 12240
            ',
            'maps'              => 'https://maps.app.goo.gl/BRPeb5f1TBNWRmn17',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
