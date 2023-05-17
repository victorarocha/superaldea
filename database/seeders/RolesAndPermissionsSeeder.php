<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $collection = collect([
            'User',
            'Role',
            'Permission',
            // 'teams',
            // ... // List all your Models you want to have Permissions for.
        ]);

        $collection->each(function ($item) {
            // create permissions for each collection item
            Permission::create(['group' => $item, 'name' => 'viewAny' . $item]);
            Permission::create(['group' => $item, 'name' => 'view' . $item]);
            Permission::create(['group' => $item, 'name' => 'create' . $item]);
            Permission::create(['group' => $item, 'name' => 'update' . $item]);
            Permission::create(['group' => $item, 'name' => 'delete' . $item]);

        });

        // Create a Super-Admin Role and assign all Permissions
        $role = \Spatie\Permission\Models\Role::create(['name' => 'super-admin']);

        $role->givePermissionTo(Permission::all());

        // Give User Super-Admin Role
        $user = \App\Models\User::whereEmail('admin@inblay.mx')->first(); // Change this to your email.
        $user->assignRole('super-admin');
    }
}
