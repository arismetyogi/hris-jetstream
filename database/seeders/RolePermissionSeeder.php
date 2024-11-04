<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $permissions = [
      'add-user',
      'edit-user',
      'delete-user',
      'view-user',
      'add-outlet',
      'edit-outlet',
      'delete-outlet',
      'view-outlet',
      'add-employee',
      'edit-employee',
      'delete-employee',
      'view-employee',
      'add-payroll',
      'edit-payroll',
      'delete-payroll',
      'view-payroll',
      // Add more permissions as needed
    ];

    foreach ($permissions as $permission) {
      Permission::create(['name' => $permission]);
    }

    $roles = [
      'superadmin',
      'admin',
      'user'
    ];

    foreach ($roles as $role) {
      Role::create(['name' => $role]);
    }

    $superadmin = Role::findByName('superadmin');
    $superadmin->givePermissionTo([
      'add-user',
      'edit-user',
      'delete-user',
      'view-user',
      'add-outlet',
      'edit-outlet',
      'delete-outlet',
      'view-outlet',
      'add-employee',
      'edit-employee',
      'delete-employee',
      'view-employee',
      'add-payroll',
      'edit-payroll',
      'delete-payroll',
      'view-payroll',
    ]);

    $admin = Role::findByName('admin');
    $admin->givePermissionTo([
      'add-outlet',
      'edit-outlet',
      'delete-outlet',
      'view-outlet',
      'add-employee',
      'edit-employee',
      'delete-employee',
      'view-employee',
      'add-payroll',
      'edit-payroll',
      'delete-payroll',
      'view-payroll'
    ]);

    $user = Role::findByName('user');
    $user->givePermissionTo([
      'add-employee',
      'edit-employee',
      'delete-employee',
      'view-employee',
      'add-payroll',
      'edit-payroll',
      'delete-payroll',
      'view-payroll'
    ]);
  }
}
