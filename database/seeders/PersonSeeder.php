<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Person::factory()->count(80)->create();

        // get all de people
        $people = Person::all();
        $peopleCount = $people->count();

        // populate the community person table m2m with 3 random people on ea community
        Community::all()->each(function ($community) use ($people, $peopleCount) {
            $community->people()->attach(
                $people->random(rand(1, $peopleCount))->pluck('id')->toArray()
            );
        });


    }
}
