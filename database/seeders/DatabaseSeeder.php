<?php

namespace Database\Seeders;

use App\Models\Api\Registrations\Admin\User;
use App\Models\Api\Registrations\Harvest\AgriculturalYear;
use App\Models\Api\Registrations\Harvest\Culture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'), // 123456789
            'remember_token' => Str::random(10),
        ]);

        /*AgriculturalYear::create([
            'name' => '2023/2024',
            'opening_date' => '2023-01-01',
            'closing_date' => '2024-12-31',
            'status' => 'A',
        ]);*/

        Culture::create([
            'name' => 'SOJA',
            'status' => 'A',
        ]);
        Culture::create([
            'name' => 'MILHO',
            'status' => 'A',
        ]);
        Culture::create([
            'name' => 'MILHETO',
            'status' => 'A',
        ]);

    }
}
