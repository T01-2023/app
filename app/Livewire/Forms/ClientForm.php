<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Client;


class ClientForm extends Form
{
     public ?Client $client;

     #[Validate('required|min:5')]
     public $raisonsociale;
     public $siret;
     public $adresse;
     public $codepostal;
     public $ville;
     public $web;

     public function setClient(Client $client)
     {
          $this->client = $client;
          $this->raisonsociale = $client->raisonsociale;
          $this->siret = $client->siret;
          $this->adresse = $client->adresse;
          $this->codepostal= $client->codepostal;
          $this->ville = $client->ville;
          $this->web = $client->web;
     }

     public function update()
     {
         $this->validate();
  
         $this->client->update($this->all());
     }
  
     public function store()
     {
         $this->validate();
  
         Client::create($this->all());
     }
  
     
 }
