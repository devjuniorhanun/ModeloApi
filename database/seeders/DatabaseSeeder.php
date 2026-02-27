<?php

namespace Database\Seeders;

use App\Models\Api\Registrations\Admin\User;
use App\Models\Api\Registrations\Agricultural\AgriculturalOperator;
use App\Models\Api\Registrations\Agricultural\TypeOperation;
use App\Models\Api\Registrations\Harvest\AgriculturalYear;
use App\Models\Api\Registrations\Harvest\Crop;
use App\Models\Api\Registrations\Harvest\Culture;
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
/*
        AgriculturalYear::create([
            'id' => '019ca085-5140-72eb-9259-2450d3ccea15',
            'name' => 'ANO AGRÍCOLA 2025/2026',
            'opening_date' => '2025-10-01',
            'closing_date' => '2026-09-30',
            'status' => 'A',
        ]);

        Crop::create([
            'id' => '019ca085-5140-72eb-9259-2450d3ccea15',
            'agricultural_year_id' => '019ca085-5140-72eb-9259-2450d3ccea15',
            'name' => 'SAFRINHA 2025/2026',
            'opening_date' => '2025-10-01',
            'closing_date' => '2026-09-30',
            'status' => 'A',
        ])->cultures()->attach('019ca084-3c49-712c-b0ef-0b1e103e6670');

        Owner::create([
            'id' => '019ca090-f840-71db-9e45-3f60f1507002',
            'name' => 'PROPRIETÁRIO RAZÃO 01',
            'fantasy_name' => 'PROPRIETÁRIO FANTASIA 01',
            'payment_type' => 'D',
            'status' => 'A',
        ]);

        Producer::create([
            'id' => '019ca092-f08c-70fb-9911-e0e1637c97f4',
            'owner_id' => '019ca090-f840-71db-9e45-3f60f1507002',
            'status' => 'A',
        ]);

        Farm::create([
            'id' => '019ca094-1902-7151-a0a6-ea0b030d2849',
            'owner_id' => '019ca090-f840-71db-9e45-3f60f1507002',
            'producer_id' => '019ca092-f08c-70fb-9911-e0e1637c97f4',
            'name' => 'FAZENDA 01',
            'area' => 500.00,
            'status' => 'A',
        ]);

        Field::create([
            'id' => '019ca096-9c8e-7a1b-9c0d-1f0e5c3b2a1f',
            'farm_id' => '019ca094-1902-7151-a0a6-ea0b030d2849',
            'name' => 'CAMPO 01',
            'area' => 100.00,
            'status' => 'A',
        ]);

        FleetGroup::create([
            'id' => '019ca099-17bd-712c-bbb2-97f2d43b664a',
            'name' => 'PULVERIZADOR',
            'status' => 'A',
        ]);

        FleetModel::create([
            'id' => '019ca098-9c8e-7a1b-9c0d-1f0e5c3b2a1f',
            'fleet_brand_id' => '019ca099-17bd-712c-bbb2-97f2d43b664a',
            'name' => 'MODELO DE FROTA 01',
        ]);

        FleetBrand::create([
            'id' => '019ca099-d1b2-7136-9cbe-7be6ce76ee9a',
            'name' => 'JACTO',
            'status' => 'A',
        ]);

        FleetModel::create([
            'id' => '019ca09b-0234-717a-9ce9-f5ce911d0f39',
            'fleet_brand_id' => '019ca099-d1b2-7136-9cbe-7be6ce76ee9a',
            'name' => 'MODELO DE FROTA 01', 
        ]);

        Fleet::create([
            'id' => '019ca0b7-d88f-71a1-ba25-5e105eaf9259',
            'fleet_group_id' => '019ca099-17bd-712c-bbb2-97f2d43b664a',
            'fleet_brand_id' => '019ca099-d1b2-7136-9cbe-7be6ce76ee9a',
            'fleet_model_id' => '019ca09b-0234-717a-9ce9-f5ce911d0f39',
            'name' => 'FROTA 12',
            'code' => '12',
            'plate' => 'ABC-0D54',
            'fleet_type' => 'P',
            'year' => 2020,
            'fuel_type' => 'A',
            'starting_meter' => '25',
            'end_gauge' => '100',
            'status' => 'A',
        ]);

        Employee::create([
            'id' => '019ca0e1-1c94-7232-97f7-5c454c7319f2',
            'name' => 'FUNCIONÁRIO 01',
            'status' => 'A',
        ]);

        TypeOperation::create([
            'id' => '019ca0dc-5470-70d1-9dd0-17faa4879861',
            'name' => 'PRÉ PLANTIO',
            'status' => 'A',
        ]);

        AgriculturalOperator::create([
            'id' => '019ca0e2-00cb-7030-bd84-5b7e98aae24b',
            'employee_id' => '019ca0e1-1c94-7232-97f7-5c454c7319f2',
        ]);*/


    }
}
