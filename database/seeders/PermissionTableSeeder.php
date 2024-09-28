<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Permission;
// use App\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Log;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        // Reset cached roles and permissions
        // app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        // // Create users

        $admins = [
            [
                'first_name' => 'Nimesh',
                'last_name' => 'Trivedi',
                'email' => 'trivedinimesh6@gmail.com',
                'isd_code' => '+91',
                'phone_number' => '9619816128',
            ],
        ];
        
        // create permissions
        $permissions = [
            'view blog',
            'create blog',
            'edit blog',
            'delete blog',

            'view event',
            'create event',
            'edit event',
            'delete event',

            'view subscription',
            'create subscription',
            'edit subscription',
            'delete subscription',

            'view permission',
            'create permission',
            'edit permission',
            'delete permission',

            'view role',
            'create role',
            'edit role',
            'delete role',

            'view user',
            'create user',
            'edit user',
            'delete user'
        ];
        // create Roles
        $roles = [
            'user',
            'admin',
            'member',
        ];
        // Adding permissions to db
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        // Adding Roles to db
        foreach ($roles as $role) {
            $addRole = Role::create(['name' => $role]);
            // Assigning Permission to roles
            if ($role == 'admin') {
                $addRole->givePermissionTo(Permission::all());
            } else if ($role == 'user') {
                $addRole->givePermissionTo([
                    'view subscription',
                    'view user',
                    'view blog',
                    'view event',
                ]);
            }
        }

        
        // Adding admins to db
        foreach($admins as $admin){
            User::Create([
                'first_name' => $admin['first_name'],
                'last_name' => $admin['last_name'],
                'email' => $admin['email'],
                'isd_code' => $admin['isd_code'],
                'phone_number' => $admin['phone_number'],
                'password' => bcrypt('Admin@123')
            ])->assignRole('admin');
        }

    }
}
