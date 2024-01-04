<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['name' => 'system'],
            [
                'id' => 1,
                'email' => 'horbalszymon@gmail.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
            ]
        );
    }
}
