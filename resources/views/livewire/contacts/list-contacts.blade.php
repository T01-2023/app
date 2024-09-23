<div>
   

          <x-page-heading title="Contacts" subtitle="Annuaire des contacts." link="{{ route('contacts.create') }}" linkname="Créer un contact"/>
     
          <div class="sm:flex sm:items-center mt-10">
               <div class="mr-6">
                    <input wire:model.live.debounce.500ms="search" type="text" placeholder="Rechercher..." id="search" autocomplete="off" class="border border-gray-200 w-full text-gray-500 text-sm rounded block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
               </div>
          </div>

          
{{--      
          <div class="mt-10 p-8 border border-gray-200 rounded"> --}}
               <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8 mt-5">
               @foreach($contacts as $contact)
               
                    <div class="divide-y divide-gray-200 text-xs text-gray-500 border border-gray-200 overflow-hidden rounded bg-white">
                         <div class="sm:flex sm:items-center px-4 py-5 sm:px-4 font-medium text-sm text-gray-500">
                              <div class="sm:flex-auto">
                                   {{ Str::upper($contact->nom) }} {{ $contact->prenom }}
                              </div>
                              @if(isset($contact->clients->id))
                              <a href="{{ route('contacts.edit', $contact->id) }}">
                                        @else
                                        <a href="#">
                                        @endif
                                   <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none bg-slate-400 p-1 text-white rounded hover:bg-slate-400/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                   </div>
                              </a>
                         </div>
                         <div class="px-4 py-2">
                              <p class="py-1"><span class="font-medium text-gray-700">Email :</span> {{ $contact->email}}</p>
                              <p class="py-1"><span class="font-medium text-gray-700">Tél. mobile :</span>  {{ $contact->mobile}}</p>
                              <p class="py-1"><span class="font-medium text-gray-700">Tél. fixe :</span>  {{ $contact->fixe}}</p>
                         </div>
                         <div class="px-4 py-1">
                              <a href="{{ isset($contact->clients->id) ? route('clients.show', $contact->clients->id) : '#' }}">
                                   <p class="py-1"><span class="font-medium text-gray-700">Client : </span>{{ $contact->clients?->raisonsociale }}</p>
                              </a>
                         </div>
                         <div class="px-4 py-1">
                              <p class="py-1"><span class="font-medium text-gray-700">Site : </span>{{ $contact->sites?->nom }}</p>
                         </div>
                       </div>
                
                @endforeach
               </div>
          {{-- </div> --}}
     
          <div class="mt-20">
               {{ $contacts->links() }}  
          </div>
     

     
</div>
