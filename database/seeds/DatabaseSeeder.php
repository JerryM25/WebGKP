<?php

use Illuminate\Database\Seeder;
use App\akun;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        akun::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'id' => '1',
        ]);

        // Buat user biasa
        akun::create([
            'username' => 'user1',
            'email' => 'user1@example.com',
            'password' => Hash::make('password'),
            'id' => '2',
        ]);
    }
}
