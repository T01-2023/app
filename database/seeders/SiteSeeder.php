<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $clients = Client::all();
        
     Site::factory()
          ->count(30)
          ->sequence(fn () => [
               'client_id' => $clients->random(),
          ])
          ->create();
    }
}
