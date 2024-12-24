<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::create([
            'name'      => 'Raka Grarizki',
            'email'     => 'raka.grarizki@gmail.com',
            'password'  => bcrypt('123MostOP'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');

        $superadmin = User::create([
            'name'      => 'Admin',
            'email'     => 'admin@grarizki.com',
            'password'  => bcrypt('123MostOP'),
            'email_verified_at' => now()
        ]);

        $superadmin->assignRole('Super admin');
    }
}
