<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Home;
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

        Person::factory()->count(180)->create();

        // get all the people and count them
        $people = Person::all();
        $peopleCount = $people->count();


        // populate the community person table m2m with X random people on ea community
        Community::all()->each(
            function ($community) use ($people, $peopleCount) {
                $community->people()->attach(
                    $people->random(rand(1, $peopleCount))->pluck('id')->toArray()
                );

            }
        );


        // populate the home person table m2m with X random people on ea home
        Home::all()->each(
            function ($home) use ($people) {
                $home->people()->attach(
                    $people->random(rand(1, 6))->pluck('id')->toArray()
                );

            }
        );

    }
}
