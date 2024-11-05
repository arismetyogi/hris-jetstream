<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Department::insert([
      ['id' => 2, 'name' => 'Operation Performance'],
      ['id' => 3, 'name' => 'Supply Chain'],
      ['id' => 4, 'name' => 'Finance'],
      ['id' => 5, 'name' => 'Accounting'],
      ['id' => 6, 'name' => 'Tax'],
      ['id' => 7, 'name' => 'Legal'],
      ['id' => 8, 'name' => 'Corporate Communication'],
      ['id' => 9, 'name' => 'Procurement'],
      ['id' => 10, 'name' => 'Human Resources'],
      ['id' => 11, 'name' => 'Relation Management'],
      ['id' => 12, 'name' => 'Financial Planning & Analysis'],
      ['id' => 1, 'name' => 'Information Technology'],
      ['id' => 3168, 'name' => 'UB Ambon'],
      ['id' => 3102, 'name' => 'UB Balikpapan'],
      ['id' => 3101, 'name' => 'UB Banda Aceh'],
      ['id' => 3103, 'name' => 'UB Bandung'],
      ['id' => 3169, 'name' => 'UB Bangka Belitung'],
      ['id' => 3107, 'name' => 'UB Banjarmasin'],
      ['id' => 3108, 'name' => 'UB Batam'],
      ['id' => 3110, 'name' => 'UB Bekasi'],
      ['id' => 3112, 'name' => 'UB Bogor'],
      ['id' => 3148, 'name' => 'UB Cilegon'],
      ['id' => 3114, 'name' => 'UB Cirebon'],
      ['id' => 3116, 'name' => 'UB Denpasar'],
      ['id' => 3113, 'name' => 'UB Depok'],
      ['id' => 3126, 'name' => 'UB Gorontalo'],
      ['id' => 3144, 'name' => 'UB Gresik'],
      ['id' => 3133, 'name' => 'UB Jambi'],
      ['id' => 3117, 'name' => 'UB Jaya I'],
      ['id' => 3118, 'name' => 'UB Jaya II'],
      ['id' => 3119, 'name' => 'UB Jayapura'],
      ['id' => 3120, 'name' => 'UB Jember'],
      ['id' => 3111, 'name' => 'UB Karawang'],
      ['id' => 3121, 'name' => 'UB Kendari'],
      ['id' => 3122, 'name' => 'UB Kupang'],
      ['id' => 3123, 'name' => 'UB Lampung'],
      ['id' => 3171, 'name' => 'UB Madura'],
      ['id' => 3124, 'name' => 'UB Makassar'],
      ['id' => 3125, 'name' => 'UB Malang'],
      ['id' => 3127, 'name' => 'UB Manado'],
      ['id' => 3129, 'name' => 'UB Mataram'],
      ['id' => 3130, 'name' => 'UB Medan'],
      ['id' => 3115, 'name' => 'UB Nusadua'],
      ['id' => 3131, 'name' => 'UB Padang'],
      ['id' => 3132, 'name' => 'UB Palangkaraya'],
      ['id' => 3134, 'name' => 'UB Palembang'],
      ['id' => 3135, 'name' => 'UB Palu'],
      ['id' => 3140, 'name' => 'UB Pekalongan'],
      ['id' => 3136, 'name' => 'UB Pekanbaru'],
      ['id' => 3137, 'name' => 'UB Pontianak'],
      ['id' => 3170, 'name' => 'UB Purwokerto'],
      ['id' => 3139, 'name' => 'UB Samarinda'],
      ['id' => 3141, 'name' => 'UB Semarang'],
      ['id' => 3145, 'name' => 'UB Sidoarjo'],
      ['id' => 3143, 'name' => 'UB Sorong'],
      ['id' => 3147, 'name' => 'UB Sukabumi'],
      ['id' => 3146, 'name' => 'UB Surabaya'],
      ['id' => 3142, 'name' => 'UB Surakarta'],
      ['id' => 3149, 'name' => 'UB Tangerang'],
      ['id' => 3109, 'name' => 'UB Tanjung Pinang'],
      ['id' => 3105, 'name' => 'UB Tasikmalaya'],
      ['id' => 3128, 'name' => 'UB Ternate'],
      ['id' => 3150, 'name' => 'UB Yogya'],
    ]);
  }
}
