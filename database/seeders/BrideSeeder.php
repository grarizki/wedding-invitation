<?php

namespace Database\Seeders;

use App\Models\Bride;
use Illuminate\Database\Seeder;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bride::create([
            'wedding_id' => 1,
            'name' => 'Raka Grarizki',
            'child' => 'Putra Ketiga dari',
            'name_father' => 'Bpk Setiardjo',
            'name_mother' => 'Ibu Endang Setiawati',
            'instagram' => 'https://www.instagram.com/grarizki/',
            'bank_id' => 2,
            'acc_name' => 'Raka Grarizki',
            'acc_number' => '102655243947',
            'gender' => 'Male',
            'photo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Bride::create([
            'wedding_id' => 1,
            'name' => 'Ciska Olivia',
            'child' => 'Putri Kedua dari',
            'name_father' => 'Bpk Lihon Ba\'i',
            'name_mother' => 'Ibu Kartini',
            'instagram' => 'https://www.instagram.com/ciskaolivia/',
            'bank_id' => 1,
            'acc_name' => 'Ciska Olivia',
            'acc_number' => '0411542954',
            'gender' => 'Female',
            'photo' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
