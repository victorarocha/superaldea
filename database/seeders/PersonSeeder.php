<?php

namespace Database\Seeders;

use App\Models\Community;
use Illuminate\Database\Seeder;
use App\Models\Person;
use Illuminate\Support\Facades\File;


class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete people pictures
        File::delete(File::glob(storage_path('app/public/*.png')));
        File::delete(File::glob(storage_path('app/public/*.jpg')));

        Person::factory()->count(80)->create();

        // get all the people and count them
        $people = Person::all();
        $peopleCount = $people->count();


        // populate the community person table m2m with 3 random people on ea community
        Community::all()->each(
            function ($community) use ($people, $peopleCount) {
                $community->people()->attach(
                    $people->random(rand(1, $peopleCount))->pluck('id')->toArray()
                );

            });


    }
}
