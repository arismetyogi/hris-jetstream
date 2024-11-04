<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $suadmin = User::create([
      "name" => "Super Admin",
      "email" => "suadmin@gmail.com",
      "password" => Hash::make("password"),
    ]);
    $suadmin->assignRole("superadmin");

    $admin = User::create([
      "name" => "Admin",
      "email" => "admin@gmail.com",
      "password" => Hash::make("password"),
    ]);
    $admin->assignRole("admin");

    $user = User::create([
      "name" => "Regular User",
      "email" => "user@gmail.com",
      "password" => Hash::make(value: "password"),
    ]);
    $user->assignRole("user");
  }
}
