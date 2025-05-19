<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; // Tambahkan ini

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat role super_admin jika belum ada
        Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);

        // Cek apakah user admin sudah ada
        $user = User::where('email', 'admin@admin.com')->first();
    
        if (!$user) {
            // Buat user admin
            $user = User::factory()->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
            ]);

            // Berikan role super_admin
            $user->assignRole('super_admin');
        }
    
        // Jalankan seeder lain
        $this->call([
            GuruSeeder::class,
        ]);
    }
}
