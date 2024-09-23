<?php

namespace App\Livewire\Clients;

use Livewire\Component;
use App\Models\Client;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;


class ListClients extends Component
{
     use WithPagination; 

     public string $search = '';

     #[Layout('components.layouts.app')]
     public function render()
     {
          $query = Client::query();

          $query = $this->applySearch($query);

          return view('livewire.clients.list-clients', [
               'clients' => $query->paginate(20),
          ]);
     }

     public function applySearch(Builder $query )
     {
          return $query->where('raisonsociale','like', '%'.$this->search.'%')
          ->orWhere('siret','like', '%'.$this->search.'%')
          ->orWhere('codepostal','like', '%'.$this->search.'%')
          ->orWhere('ville','like', '%'.$this->search.'%');
     }

     public function updatingSearch() // Permet la recherche sur toutes les pages avec la pagination
     {
          $this->resetPage();
     }
}
