<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Livewire\Forms\ClientForm;


class CreateClients extends Component
{
     public ClientForm $form;

     public function addClient()
     {
          $this->form->store();
          return $this->redirect(route('clients.index'), navigate: true);
     }

     public function render()
     {
          return view('livewire.clients.create-clients');
     }
}
