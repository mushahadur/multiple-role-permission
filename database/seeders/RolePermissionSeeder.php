<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Roles
        $roleSuperAdmin = Role::create(['name'=>'superadmin']);
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleEditor = Role::create(['name'=>'editor']);
        $roleuser = Role::create(['name'=>'user']);

        // Permission list as array
        $psermissions = [
            // Dashboard Permissions
            'dashboard-view',

            // Blog Permissions
            'blog-create',
            'blog-view',
            'blog-edit',
            'blog-delete',
            'blog-approve',

             // Admin Permissions
             'admin-create',
             'admin-view',
             'admin-edit',
             'admin-delete',
             'admin-approve',

               // Role Permissions
               'role-create',
               'role-view',
               'role-edit',
               'role-delete',
               'role-approve',

                 // Profile Permissions
                'profile-view',
                'profile-edit'
        ];

        // Create and Assign Permissions
        for ($i=0; $i < count($psermissions); $i++) { 
            # Create Permissions
            $psermission = Permission::create(['name'=> $psermissions[$i]]);
            $roleSuperAdmin->givePermissionTo($psermission);
            $psermission->assignRole($roleSuperAdmin);
        }
    }
}
