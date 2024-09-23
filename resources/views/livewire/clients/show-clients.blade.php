<div>

     <x-page-heading title="{{ $client->raisonsociale }}" subtitle="Consultation et gestion." link="{{ route('clients.index') }}" linkname="Retour"/>

     <!-- Informations générales -->
     <div class="mt-10 p-8 border border-gray-200 rounded">
          <div class="px-4 sm:px-0">
               <h3 class="text-lg font-bold leading-7 text-slate-500">Informations générales</h3>
          </div>
          <div class="mt-10 border-t border-gray-100">
               <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Société / Client</dt>
                         <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{ $client->raisonsociale }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Numéro Siret</dt>
                         <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{ $client->siret }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Adresse</dt>
                         <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{ $client->adresse }}<br />{{ $client->codepostal }} {{ $client->ville }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Site web</dt>
                         <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">{{ $client->web }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Commentaire</dt>
                         <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Contact(s)</dt>
                         <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">
                              @forelse ($client->contacts as $contact)
                                   <div class="flex flex-wrap items-center justify-between sm:flex-nowrap p-4 rounded border border-gray-200 mb-5 last:-mb-0">
                                        <div>
                                             <h3 class="font-semibold text-gray-700">{{ $contact->nom.' '.$contact->prenom }}</h3>
                                             <p class="text-sm text-gray-500 mb-2"><a href="#">{{ $contact->email }}</a></p>
                                             <p>Tél. mobile : {{ $contact->mobile }}</p>
                                             <p>Tél. fixe : {{ $contact->fixe }}</p>
                                        </div>
                                        <div class="flex flex-shrink-0 text-gray-700">
                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-5">
                                                  <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                             </svg>
                                        </div>
                                   </div>
                              @empty
                                   <p class="text-gray-500">Pas de contacts définis pour cette société.</p>
                              @endforelse
                         </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                         <dt class="text-sm font-medium leading-6 text-gray-900">Piéce jointe</dt>
                         <dd class="mt-2 text-sm text-gray-500 sm:col-span-2 sm:mt-0">
                              <ul role="list" class="divide-y divide-gray-100 rounded border border-gray-200">
                                   <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                        <div class="flex w-0 flex-1 items-center">
                                             <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                             </svg>
                                             <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                  <span class="truncate font-medium">Fiche de la société.pdf</span>
                                                  <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                             </div>
                                        </div>
                                        <div class="ml-4 flex-shrink-0">
                                             <a href="#" class="font-medium text-indigo-700 hover:text-indigo-600">Télécharger</a>
                                        </div>
                                   </li>
                              </ul>
                         </dd>
                    </div>
                    <div class="mt-10 pt-8 flex items-center justify-between">
                         <a href="{{ route('clients.edit', $client->id) }}" class="py-2 px-6 rounded font-normal text-sm text-white bg-teal-700 hover:bg-teal-700/90">Modifier</a>
                         <button wire:confirm="etes sur de deleter ?" wire:click="delete({{ $client->id }})" class="py-2 px-6 rounded font-normal text-sm text-white bg-red-700 hover:bg-red-700/90">Supprimer</button>
                    </div>
               </dl>
          </div>
     </div>

     <!-- Sites -->
     <div class="mt-10 p-8 border border-gray-200 rounded">
          <div class="px-4 sm:px-0">
               <h3 class="text-lg font-bold leading-7 text-slate-500">Sites</h3>
          </div>
          <div class="mt-10 border-t border-gray-100">
               <dl class="divide-y divide-gray-100">
                    @forelse ($client->sites as $site)
                         <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">
                                   <p class="py-2 px-2 mb-3 rounded font-normal text-sm text-white bg-slate-500">{{ $client->raisonsociale }} | {{ $site->nom }}</p>
                                   <p class="px-2 text-gray-500 font-medium">{{ $site->adresse }}</p>
                                   <p class="px-2 text-gray-500 font-medium">{{ $site->codepostal. ' '.Str::upper($site->ville) }}</p>
                              </dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-500 sm:col-span-2 sm:mt-0">
                                   @forelse ($site->contacts as $site) 
                                        <div class="flex flex-wrap items-center justify-between sm:flex-nowrap p-4 rounded border border-gray-200 mb-5 last:-mb-0">
                                             <div>
                                                  <h3 class="font-semibold text-gray-700">{{ $site->nom.' '.$site->prenom }}</h3>
                                                  <p class="text-sm text-gray-500 mb-2"><a href="#">{{ $site->email }}</a></p>
                                                  <p>Tél. mobile : {{ $site->mobile }}</p>
                                                  <p>Tél. fixe : {{ $site->fixe }}</p>
                                             </div>
                                             <div class="flex flex-shrink-0 text-gray-700 bg-green-50">
                                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="size-5">
                                                       <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                                  </svg>
                                             </div>
                                        </div>
                                   @empty
                                        <p class="text-gray-500">Pas de contacts définis pour ce site.</p>
                                   @endforelse
                              </dd>
                         </div>
                    @empty
                         <p class="mt-6 text-gray-500 text-sm">Pas de sites définis pour ce client.</p>
                    @endforelse
               </dl>
          </div>
     </div>

</div>
