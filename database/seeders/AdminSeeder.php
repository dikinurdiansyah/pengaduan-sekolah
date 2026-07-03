<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus user lama untuk menghindari konflik
        User::where('email', 'admin@sekolah.sch.id')->delete();

        User::create([
            'name' => 'Admin Sekolah',
            'nis' => 'ADMIN001',
            'email' => 'admin@sekolah.sch.id',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        $this->command->info('Admin user created successfully!');
        $this->command->info('Email: admin@sekolah.sch.id');
        $this->command->info('Password: password');
    }
}