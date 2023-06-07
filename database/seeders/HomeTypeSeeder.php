<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $collection = collect([
            'Casa',
            'Departamento',
            'Oficina'
        ]);

        $collection->each(
            function ($item) {
            DB::table('home_types')->insert([
                'name' => $item,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            }

        );
    }
}
