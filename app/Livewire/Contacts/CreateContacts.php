<?php

namespace App\Livewire\Contacts;

use Livewire\Component;
use App\Livewire\Forms\ContactForm;


class CreateContacts extends Component
{
     public ContactForm $form;

     public function addContact()
     {
          $this->form->store();
          return $this->redirect(route('contacts.index'), navigate: true);
     }

     public function render()
     {
          return view('livewire.contacts.create-contacts');
     }
}
