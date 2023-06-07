<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $collection = collect([
            ['Electricidad y Plomería', 'Instalación y reparación de cableado eléctrico y tubería hidráulica.'],
            ['Fumigación', 'Fumigación para el hogar.'],
            ['Maestro de Obra', 'Servicios de albañilería.'],
            ['Mozo', 'Ayudante para tareas en el hogar.'],
            ['Empleada Doméstica', 'Ayudante para tareas en el hogar.'],
            ['Lavandería y Tintorería', 'Lavado de ropa.'],
            ['Limpieza de muebles y alfombras', 'Limpieza general de muebles, alfombras, colchones y cortinas.'],
            ['Servicio de Gas', 'Suministro de gas.'],
            ['Servicio de Agua Potable', 'Suministro de agua potable.'],
            ['Telefonía e Internet', 'Suministro de servicios de telefonía e Internet.'],
            ['Jardinería', 'Servicios de jardinería.'],
            ['Mudanzas', 'Servicios de mudanza.'],
            ['Otros', 'Otros servicios']
        ]);

        $collection->eachSpread(function($name, $description){
            DB::table('services')->insert([
                'name' => $name,
                'description' => $description,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        });


        /*
         * Populate the services of each supplier
         * */
        $service = Service::all();
        $serviceCount = $service->count();

        Supplier::all()->each(function ($supplier) use ($service, $serviceCount) {
            $supplier->services()
                ->attach($service->random(rand(1, $serviceCount))
                    ->pluck('id')
                    ->toArray());
        });




    }
}
