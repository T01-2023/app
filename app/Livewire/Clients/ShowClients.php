<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Site;
use App\Models\Client;
use App\Models\Contact;


class ShowClients extends Component
{
     // public function mount(Client $client)
     // {
     //      $this->client=$client;

     //      $this->site=$site;

     //      $this->site=Client::find($this->client->id)->sites;

     //      $this->contact=Client::find($this->client->id)->contacts;

     //      $this->sitecontact=Site::find(20)->contacts;
     // }

     public function mount(Client $client)
     {
          $this->client=$client;

          $client->load("sites.contacts" , "contacts");


     }

     public function delete($client_id)
     {
          Client::find($client_id)->delete();

          return $this->redirect(route('clients.index'), navigate: true);
     }


     public function render()
     {
          return view('livewire.clients.show-clients', [ 
               'client' => $this->client,
          ]);
     }
}
