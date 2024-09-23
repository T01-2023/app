<?php

namespace App\Livewire\Contacts;

use Livewire\Component;
use App\Livewire\Forms\ContactForm;
use App\Models\Contact;


class EditContacts extends Component
{
     public ContactForm $form;

     public function mount(Contact $contact)
     {
          $this->form->setContact($contact);
     }

     public function save()
     {

          // dd($this->form);
          $this->form->update();

          return $this->redirect(route('contacts.index', [ 'contact' => $this->form->contact]), navigate: true);
     }

     public function render()
     {
          return view('livewire.contacts.edit-contacts');
     }
}
