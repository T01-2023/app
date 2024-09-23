<?php

namespace App\Livewire\Contacts;

use Livewire\Component;
use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class ListContacts extends Component
{
     use WithPagination; 

     public string $search = '';

     #[Layout('components.layouts.app')]
     public function render()
     {
          $query = Contact::query();

          $query = $this->applySearch($query);

          return view('livewire.contacts.list-contacts', [
               'contacts' => $query->latest()->paginate(12),
          ]);
     }

     public function applySearch(Builder $query )
     {
          return $query->where('nom','like', '%'.$this->search.'%')
                         ->orWhere('prenom','like', '%'.$this->search.'%')
                         ->orWhere('email','like', '%'.$this->search.'%')
                         ->orWhere('mobile','like', '%'.$this->search.'%')
                         ->orWhere('fixe','like', '%'.$this->search.'%');
     }

     public function updatingSearch() // Permet la recherche sur toutes les pages avec la pagination
     {
          $this->resetPage();
     }



}
