<div>

     <x-page-heading title="Société" subtitle="Page de création d'un client / société." link="{{ route('clients.index') }}" linkname="Retour"/>

     <div class="mt-10 p-8 border border-gray-200 rounded">
          <div class="px-4 sm:px-0">
               <h3 class="text-lg font-bold leading-7 text-slate-500">Informations générales</h3>
               <p class="mt-1 max-w-2xl text-xs leading-6 text-gray-400">Les champs marqués d'une * sont obligatoires.</p>
          </div>

          <form wire:submit="save" autocomplete="off" novalidate>
               @csrf
               <div class="space-y-12 sm:space-y-16">
                    <div class="mt-10 space-y-8 border-b border-gray-100 pb-12 sm:space-y-0 sm:divide-y sm:divide-gray-100 sm:border-t sm:pb-0">
                         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Raison sociale</label>
                              <div class="mt-2 sm:col-span-2 sm:mt-0">
                                   <input type="text" wire:model="form.raisonsociale" id="raisonsociale" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                   <div>
                                        @error('form.raisonsociale')
                                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                                        @enderror 
                                   </div>
                              </div>
                         </div>
                         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Siret</label>
                              <div class="mt-2 sm:col-span-2 sm:mt-0">
                                   <input type="text" wire:model="form.siret" id="siret" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                   <div>
                                        {{-- @error($raisonsociale)
                                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                                        @enderror --}}
                                   </div>
                              </div>
                         </div>
                         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Adresse</label>
                              <div class="mt-2 sm:col-span-2 sm:mt-0">
                                   <input type="text" wire:model="form.adresse" id="adresse" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                   <div>
                                        {{-- @error($raisonsociale)
                                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                                        @enderror --}}
                                   </div>
                              </div>
                         </div>
                         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Code postal</label>
                              <div class="mt-2 sm:col-span-2 sm:mt-0">
                                   <input type="text" wire:model="form.codepostal" id="codepostal" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                   <div>
                                        {{-- @error($raisonsociale)
                                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                                        @enderror --}}
                                   </div>
                              </div>
                         </div>
                         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Ville</label>
                              <div class="mt-2 sm:col-span-2 sm:mt-0">
                                   <input type="text" wire:model="form.ville" id="ville" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                   <div>
                                        {{-- @error($raisonsociale)
                                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                                        @enderror --}}
                                   </div>
                              </div>
                         </div>
                         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
                              <label for="name" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">web</label>
                              <div class="mt-2 sm:col-span-2 sm:mt-0">
                                   <input type="text" wire:model="form.web" id="web" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                                   <div>
                                        {{-- @error($raisonsociale)
                                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                                        @enderror --}}
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          
               <div class="mt-10 flex items-center justify-center">
                    <button type="submit" class="py-2 px-6 rounded font-normal text-sm text-white bg-slate-500 hover:bg-slate-500/90">Update</button>
               </div>
          </form>
     </div>

</div>
