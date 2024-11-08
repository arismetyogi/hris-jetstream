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
      "first_name" => "Super",
      "last_name" => "Admin",
      "email" => "suadmin@gmail.com",
      "password" => Hash::make("password"),
      "department_id" => 1,
      "profile_photo_path" => asset("images/user-36-06.jpg"),
    ]);
    $suadmin->assignRole("superadmin");

    $admin = User::create([
      "first_name" => "Admin",
      "last_name" => null,
      "email" => "admin@gmail.com",
      "password" => Hash::make("password"),
      "department_id" => 1,
      "profile_photo_path" => asset("images/user-36-05.jpg"),
    ]);
    $admin->assignRole("admin");

    $user = User::create([
      "first_name" => "Regular",
      "last_name" => "User",
      "email" => "user@gmail.com",
      "password" => Hash::make(value: "password"),
      "department_id" => 3112,
      "profile_photo_path" => asset("images/user-36-07.jpg"),
    ]);
    $user->assignRole("user");
  }
}
