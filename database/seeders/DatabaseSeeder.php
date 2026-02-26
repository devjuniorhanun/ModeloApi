<?php

namespace Database\Seeders;

use App\Models\Api\Registrations\Admin\User;
use App\Models\Api\Registrations\Harvest\AgriculturalYear;
use App\Models\Api\Registrations\Harvest\Culture;
use App\Models\Api\Registrations\Suppliers\TypeSupplier;
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

        TypeSupplier::create([
            'id' => '019c9714-a6b4-70c1-86c3-e24b4a3c1567',
            'name' => 'ARMAZÉM',
            'status' => 'A',
        ]);
        TypeSupplier::create([
            'id' => '019c970e-8ded-71f7-ba5e-9ea035465327',
            'name' => 'COLHEDOR',
            'status' => 'A',
        ]);
        TypeSupplier::create([
            'id' => '019c970e-7962-7023-a190-aa0c65b1ac5c',
            'name' => 'TRANSPORTADOR',
            'status' => 'A',
        ]);

    }
}
