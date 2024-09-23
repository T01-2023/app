<div>

     <x-page-heading title="Société" subtitle="Listing des clients / sociétés." link="{{ route('clients.create') }}" linkname="Créer une société"/>

     <div class="sm:flex sm:items-center mt-10">
          <div class="mr-6">
               <input wire:model.live.debounce.500ms="search" type="text" placeholder="Rechercher..." id="search" autocomplete="off" class="border border-gray-200 w-full text-gray-500 text-sm rounded block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
          </div>
     </div>

     <div class="mt-10 p-8 border border-gray-200 rounded">
          <table class="min-w-full">
               <thead>
                    <tr class="bg-slate-500">
                         <th scope="col" class="px-3 py-3 rounded-l  text-left text-sm font-medium text-white">Société</th>
                         <th scope="col" class="hidden px-3 py-3 text-left text-sm font-semibold text-white lg:table-cell">N° Siret</th>
                         <th scope="col" class="hidden px-3 py-3 text-left text-sm font-semibold text-white sm:table-cell">Localisation</th>
                         <th scope="col" class="px-3 py-3 rounded-r text-right text-sm font-semibold text-white"></th>
                    </tr>
               </thead>
               <tbody class="divide-y divide-gray-100 bg-white">
                    @foreach ($clients as $client)
                         <tr>
                              <td class="w-full max-w-0 py-5 pl-3 text-sm font-medium text-gray-700 sm:w-auto sm:max-w-none">
                                   <a href="{{ route('clients.show', $client->id) }}">{{ $client->raisonsociale }}</a>
                                   <dl class="font-normal lg:hidden">
                                        <dt class="sr-only">Title</dt>
                                        <dd class="mt-1 truncate text-xs text-gray-500">{{ $client->siret }}</dd>
                                        <dt class="sr-only sm:hidden">Adresse</dt>
                                        <dd class="mt-1 truncate text-gray-500 sm:hidden">{{ $client->adresse }}<br>{{ $client->codepostal." ".$client->ville }}</dd>
                                   </dl>
                              </td>
                              <td class="hidden px-3 py-5 text-xs text-gray-500 lg:table-cell">{{ $client->siret }}</td>
                              <td class="hidden px-3 py-5 text-sm text-gray-500 sm:table-cell">{{ $client->adresse }} <br /> {{ $client->codepostal." ".Str::upper($client->ville) }}</td>
                              <td class="py-5 pr-3 text-sm text-right text-white">
                                   <div class="inline-flex items-center rounded bg-slate-300 px-4 py-0.5 text-xs font-normal {{ $client->contacts->count() > 0 ? 'bg-slate-300' : 'bg-slate-300/50' }}">
                                        <span class="pr-1">{{ $client->contacts->count() }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-3">
                                             <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                                        </svg>
                                   </div>
                                   <div class="inline-flex items-center rounded  px-4 py-0.5 text-xs font-normal {{ $client->sites->count() > 0 ? 'bg-slate-300' : 'bg-slate-300/50' }}">
                                        <span>{{ $client->sites->count() }}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-3">
                                             <path fill-rule="evenodd" d="m7.539 14.841.003.003.002.002a.755.755 0 0 0 .912 0l.002-.002.003-.003.012-.009a5.57 5.57 0 0 0 .19-.153 15.588 15.588 0 0 0 2.046-2.082c1.101-1.362 2.291-3.342 2.291-5.597A5 5 0 0 0 3 7c0 2.255 1.19 4.235 2.292 5.597a15.591 15.591 0 0 0 2.046 2.082 8.916 8.916 0 0 0 .189.153l.012.01ZM8 8.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Z" clip-rule="evenodd" />
                                        </svg>
                                   </div>
                              </td>
                         </tr>
                    @endforeach
               </tbody>
          </table>
     </div>

     <div class="mt-20">
          {{ $clients->links() }} 
     </div>

</div>
