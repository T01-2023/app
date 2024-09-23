<?php

namespace Database\Seeders;

use App\Models\Site;
use App\Models\Client;
use App\Models\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
     public function run(): void
     {
          $clients = Client::all();
          $sites = Site::all();
        
          Contact::factory()
               ->count(30)
               ->sequence(fn () => [
                    'client_id' => $clients->random(),
                    'site_id' => $sites->random(),
               ])

               ->create();
     }
}
