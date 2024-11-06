<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {

    $this->call([
      DashboardTableSeeder::class,
      RolePermissionSeeder::class,

      ProvinceSeeder::class,
      ZipSeeder::class,

      AreaSeeder::class,
      BandSeeder::class,
      BankSeeder::class,
      DescstatusSeeder::class,
      EmplevelSeeder::class,
      EmployeeStatusSeeder::class,
      GradeeselonSeeder::class,
      RecruitmentSeeder::class,
      TitleSeeder::class,
      SubtitleSeeder::class,

      DepartmentSeeder::class,
      StoreSeeder::class,

      UserSeeder::class,
    ]);
  }
}
