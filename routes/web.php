<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Clients\EditClients;
use App\Livewire\Clients\ListClients;
use App\Livewire\Clients\ShowClients;
use App\Livewire\Clients\CreateClients;

use App\Livewire\Contacts\EditContacts;
use App\Livewire\Contacts\ListContacts;
use App\Livewire\Contacts\CreateContacts;

Route::get('/', function () {
    return view('welcome');
});

/* Clients */
Route::get('/clients', ListClients::class)->name('clients.index');

Route::get('/clients/create', CreateClients::class)->name('clients.create');

Route::get('/clients/{client}/edit', EditClients::class)->name('clients.edit');

Route::get('/clients/{client?}/show', ShowClients::class)->name('clients.show');


/* Contacts */
Route::get('/contacts', ListContacts::class)->name('contacts.index');

Route::get('/contacts/create', CreateContacts::class)->name('contacts.create');

Route::get('/contacts/{contact}/edit', EditContacts::class)->name('contacts.edit');