<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Contact;

class ContactForm extends Form
{
     public ?Contact $contact;

     #[Validate('required')]
     public $client_id;
     public $site_id;
     public $nom;
     public $prenom;
     public $email;
     public $mobile;
     public $fixe;

     public function setContact(Contact $contact)
     {
          $this->contact = $contact;
          $this->client_id = $contact->client_id;
          $this->site_id = $contact->site_id;
          $this->nom = $contact->nom;
          $this->prenom = $contact->prenom;
          $this->email= $contact->email;
          $this->mobile = $contact->mobile;
          $this->fixe = $contact->fixe;
     }

     public function update()
     {
         $this->validate();
  
         $this->contact->update($this->all());
     }

     public function store()
     {
         $this->validate();
  
         Contact::create($this->all());
     }
  

 }
