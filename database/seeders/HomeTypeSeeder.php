<?php

namespace Database\Seeders;

use App\Models\Home;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'House',
            'Apartment'
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
