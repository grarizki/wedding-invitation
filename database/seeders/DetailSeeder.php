<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detail::create([
            'wedding_id' => 1,
            'type' => 'Acara Pernikahan',
            'date' => '2025-12-27 08:00:00',
            'address' => 'Gedung Setia Bhakti, Pangkalpinang',
            'maps' => 'https://maps.app.goo.gl/SoVqXf3zDP94cuRG6',
            'calendar' => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Pernikahan+Raka+%26+Ciska&details=Kami+sangat+berharap+anda+dapat+hadir+di+moment+bahagia+ini&location=Jakarta+International+Stadium+(JIS)&dates=20501105T010000Z/20221105T080000Z&ctz=Asia/Jakarta',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Detail::create([
            'wedding_id' => 1,
            'type' => 'Resepsi',
            'date' => '2025-12-27 10:00:00',
            'address' => 'Gedung Setia Bhakti, Pangkalpinang',
            'maps' => 'https://maps.app.goo.gl/SoVqXf3zDP94cuRG6',
            'calendar' => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Pernikahan+Raka+%26+Ciska&details=Kami+sangat+berharap+anda+dapat+hadir+di+moment+bahagia+ini&location=Jakarta+International+Stadium+(JIS)&dates=20501105T010000Z/20221105T080000Z&ctz=Asia/Jakarta',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
