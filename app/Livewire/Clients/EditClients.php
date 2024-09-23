<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Livewire\Forms\ClientForm;
use App\Models\Client;


class EditClients extends Component
{
     public ClientForm $form;

     public function mount(Client $client)
     {
          $this->form->setClient($client);
     }

     public function save()
     {
          $this->form->update();

          return $this->redirect(route('clients.show', [ 'client' => $this->form->client]), navigate: true);
     }

     public function render()
     {
          return view('livewire.clients.edit-clients');
     }
}
