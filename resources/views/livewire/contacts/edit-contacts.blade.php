<div>

<x-page-heading title="Contact" subtitle="Page de création d'un contact." link="{{ route('contacts.index') }}" linkname="Retour"/>

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
              <label for="nom" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Nom</label>
              <div class="mt-2 sm:col-span-2 sm:mt-0">
                   <input type="text" wire:model="form.nom" id="nom" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                   <div>
                        @error('form.nom')
                             <div class="mt-2 text-red-500 text-xs">{{ $message }}</div>
                        @enderror
                   </div>
              </div>
         </div>
         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
              <label for="prenom" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Prenom</label>
              <div class="mt-2 sm:col-span-2 sm:mt-0">
                   <input type="text" wire:model="form.prenom" id="prenom" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
              </div>
         </div>
         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
              <label for="mobile" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Mobile</label>
              <div class="mt-2 sm:col-span-2 sm:mt-0">
                   <input type="text" wire:model="form.mobile" id="mobile" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
              </div>
         </div>
         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
              <label for="fixe" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Fixe</label>
              <div class="mt-2 sm:col-span-2 sm:mt-0">
                   <input type="text" wire:model="form.fixe" id="fixe" value="" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-2 py-1 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
              </div>
         </div>
         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
              <label for="client_id" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Clients</label>
              <div class="mt-2 sm:col-span-2 sm:mt-0">
                   <select wire:model="form.client_id" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-1 py-1.5 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Non affecté</option>
                        @foreach (\App\Models\Client::all() as $client)
                            <option value="{{ $client->id }}">{{ $client->raisonsociale }}</option>
                        @endforeach
                    </select>
              </div>
         </div>
         <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:py-6">
              <label for="site_id" class="block text-sm font-medium leading-6 text-gray-900 sm:pt-1.5">Sites</label>
              <div class="mt-2 sm:col-span-2 sm:mt-0">
                   <select wire:model="form.site_id" class="border border-gray-200 w-full text-gray-500 text-sm rounded-md block pl-1 py-1.5 focus:outline-none sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Non affecté</option>
                        @foreach (\App\Models\Site::all() as $site)
                            <option value="{{ $site->id }}">{{ $site->nom }}</option>
                        @endforeach
                    </select>
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


