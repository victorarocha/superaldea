<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(UserSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);


        $this->call(CommunitySeeder::class);
        $this->call(HomeTypeSeeder::class);
        $this->call(HomeSeeder::class);

        $this->call(PersonSeeder::class);

        $this->call(AreaSeeder::class);
        $this->call(GateSeeder::class);
        $this->call(ServiceSeeder::class);

    }
}
