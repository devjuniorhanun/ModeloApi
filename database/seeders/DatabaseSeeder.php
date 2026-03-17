<?php

namespace Database\Seeders;

use App\Models\Api\Registrations\Admin\User;
use App\Models\Api\Registrations\Agricultural\AgriculturalOperator;
use App\Models\Api\Registrations\Agricultural\TypeOperation;
use App\Models\Api\Registrations\Harvest\AgriculturalYear;
use App\Models\Api\Registrations\Harvest\Crop;
use App\Models\Api\Registrations\Harvest\Culture;
use App\Models\Api\Registrations\Product\ProductGroup;
use App\Models\Api\Registrations\Propertie\Areas\Farm;
use App\Models\Api\Registrations\Propertie\Areas\Field;
use App\Models\Api\Registrations\Propertie\Owner;
use App\Models\Api\Registrations\Propertie\Producer;
use App\Models\Api\Registrations\Supplier\Employee;
use App\Models\Api\Registrations\Supplier\TypeSupplier;
use App\Models\Api\Registrations\Vehicle\Fleet;
use App\Models\Api\Registrations\Vehicle\FleetBrand;
use App\Models\Api\Registrations\Vehicle\FleetGroup;
use App\Models\Api\Registrations\Vehicle\FleetModel;
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
            'id' => '019ca084-3c49-712c-b0ef-0b1e103e6670',
            'name' => 'SOJA',
            'status' => 'A',
        ]);
        Culture::create([
            'id' => '019ca084-3c6b-73ae-bf83-028702d9bad9',
            'name' => 'MILHO',
            'status' => 'A',
        ]);
        Culture::create([
            'id' => '019ca084-3c8a-70a4-9b14-1c70e7a74306',
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

        FleetGroup::create([
            'id' => '019c9714-8b1e-7a9c-9d0e-1c3f2a5b6d7e',
            'name' => 'PULVERIZADOR',
            'status' => 'A',
        ]);

        ProductGroup::create([
            'id' => '019cf31f-72a1-70d5-a760-d4f37b433705',
            'name' => 'DEFENSIVOS',
            'status' => 'A',
        ]);

        ProductGroup::create([
            'id' => '019cf321-2e72-71d3-b417-fcccc1b3249e',
            'name' => 'COMBUSTÍVEIS',
            'status' => 'A',
        ]);

        



    }
}
