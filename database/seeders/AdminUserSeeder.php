<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@mejaviskin.id'],
            [
                'name' => 'Admin Mejavi Skin+',
                'password' => Hash::make('mejavi12345'),
                'email_verified_at' => now(),
            ]
        );
    }
}
