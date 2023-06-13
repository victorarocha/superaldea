<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = collect([
            ['Renta', 'Contrato de renta estándar', 'template'],
            ['Mantenimiento', 'Contrato de pago de mantenimiento', 'template'],

        ]);

        $collection->eachSpread(function ($name, $description, $template) {
            DB::table('contract_types')->insert([
                    'name' => $name,
                    'description' => $description,
                    'template' => $template,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
        });

    }
}
