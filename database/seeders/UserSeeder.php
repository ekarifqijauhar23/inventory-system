<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    // Cari pengguna berdasarkan email
    $user = User::where('email', 'admin@gmail.com')->first();

    if ($user) {
        // Ubah role pengguna menjadi admin
        $user->role = 'admin';
        $user->save();

        echo "Role pengguna dengan email admin@gmail.com berhasil diubah menjadi admin.\n";
    } else {
        echo "Pengguna dengan email admin@gmail.com tidak ditemukan.\n";
    }
}
}
