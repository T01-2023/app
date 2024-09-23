<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\ContactSeeder;

class DatabaseSeeder extends Seeder
{
     /**
     * Seed the application's database.
     */
     public function run(): void
     {
          $this->call([
               ClientSeeder::class,
               SiteSeeder::class,
               ContactSeeder::class,
          ]);
     }
}
