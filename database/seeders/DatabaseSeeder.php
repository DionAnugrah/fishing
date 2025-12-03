<?php

namespace Database\Seeders;

use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Akun ADMIN
        User::factory()->create([
            'name' => 'Admin Fishing',
            'email' => 'admin@fishing.com',
            'password' => Hash::make('password'), // Password: password
            'is_admin' => true,
        ]);

        // 2. Buat Akun USER BIASA (Customer)
        User::factory()->create([
            'name' => 'Aceng Fisherman',
            'email' => 'user@fishing.com',
            'password' => Hash::make('password'), // Password: password
            'is_admin' => false,
        ]);

        // 3. Panggil Seeder Produk yang sudah kita buat
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
