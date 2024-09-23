<header x-data="{ societes: false, interventions:false }">
     {{--  Navbar --}}
     <nav x-cloak class="bg-slate-700">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-8 py-4">
               <!-- Hamburger & Mark -->
               <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg md:hidden focus:outline-none" aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
               </button>
               <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <!--<img class="w-60" src="../images/logo.png" alt="user photo"> -->
                    <div><span class="self-center text-2xl font-semibold text-white whitespace-nowrap">RG QUALITY</span></div> 
               </a>
               <!-- Coonected user -->
               <div class="flex items-center  md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse relative" x-data="{ open: false}">
                    <button x-on:click="open = !open" type="button" class="flex">
                         <img class="w-10 h-10 rounded-full" src="{{ asset('storage/img/user.jpeg') }}" alt="user photo">
                    </button>
                    <div x-show="open" @click.outside="open=false" class="absolute top-20 right-0 bg-white text-sm text-gray-700 py-2 shadow divide-y divide-gray-100 whitespace-nowrap">
                         <ul class="pb-2">
                              <li class="block px-4  py-2 text-base text-slate-900 font-semibold whitespace-nowrap">LEFEVRE Damien </li>
                              <li class="block px-4 text-sm text-gray-400 flex-nowrap">Administrateur</li>
                         </ul>
                         <ul class="py-2">
                              <li><a href="#" class="block px-4 py-2 text-sm text-gray-500 hover:text-white hover:bg-slate-600">Profile</a> </li>
                              <li><a href="#" class="block px-4 py-2 text-sm text-gray-500 hover:text-white hover:bg-slate-600">Gestion des comptes</a></li>
                         </ul>
                         <ul class="pt-2">
                              <li>
                                   <form action="#" method="post" class="block px-4 py-2 text-sm text-gray-500 group hover:text-white hover:bg-slate-600">
                                        @csrf
                                        <div class="flex justify-between items-center">
                                             <button>Se déconnecter</button>
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"  class="fill-gray-500 group-hover:fill-white size-4">
                                                  <path fill-rule="evenodd" d="M2 8c0 .414.336.75.75.75h8.69l-1.22 1.22a.75.75 0 1 0 1.06 1.06l2.5-2.5a.75.75 0 0 0 0-1.06l-2.5-2.5a.75.75 0 1 0-1.06 1.06l1.22 1.22H2.75A.75.75 0 0 0 2 8Z" clip-rule="evenodd" />
                                             </svg>
                                        </div>
                                   </form>
                              </li>
                         </ul>
                    </div>
               </div>
               <!-- Menu -->
               <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul class="flex flex-col text-white text-sm font-normal p-4 md:p-0 mt-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                         <li><a href="#" class="block py-2 px-3 rounded hover:bg-slate-600 md:py-2 md:px-3">Dashboard</a></li>
                         <li>
                              <button @click="societes = !societes" :aria-expanded="societes ? 'true' : 'false'" class="block py-2 px-3 rounded hover:bg-slate-600 md:py-2 md:px-3">
                                   Gérer
                              </button>
                         </li>
                         <li>
                              <button @click="interventions = !interventions" :aria-expanded="interventions ? 'true' : 'false'" class="block py-2 px-3 rounded hover:bg-slate-600 md:py-2 md:px-3">
                                   Bons d'interventions
                              </button>
                         </li>
                         <li><a href="#" class="block py-2 px-3 rounded hover:bg-slate-600 md:py-2 md:px-3">Rapports</a></li>
                         <li><a href="#" class="block py-2 px-3 rounded hover:bg-slate-600 md:py-2 md:px-3">Annuaire</a></li>
                    </ul>
               </div>
          </div>
     </nav>

     {{-- Societes : content --}}
     <div x-cloak x-show="societes" @click.outside="societes = false" class="w-full border-b border-gray-200">
          <div class="max-w-screen-lg mx-auto flex flex-col md:flex-row justify-center py-6 px-12 md:px-0">

               <div>
                    <h3 class="px-3 mb-2 font-semibold text-base text-slate-500">Gestion des sociétés</h3>
                    <a href="{{ route('clients.index') }}" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Liste des sociétés</span></a>
                    <a href="{{ route('clients.create') }}" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Nouveau client</span></a>
               </div>

               <div class="py-6 md:py-0 md:px-28">
                    <h3 class="px-3 mb-2 font-semibold text-base text-slate-500">Gestion des sites</h3>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Liste des sites</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Nouveau site</span></a>
               </div>

               <div>
                    <h3 class="px-3 mb-2 font-semibold text-base text-slate-500">Gestion des des contacts</h3>
                    <a href="{{ route('contacts.index') }}" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Liste des contacts</span></a>
                    <a href="{{ route('contacts.create') }}" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Nouveau contact</span></a>
               </div>

          </div>
     </div>

     {{-- Interventions : content --}}
     <div x-cloak x-show="interventions" @click.outside="interventions = false" class="w-full border-b border-gray-200">
          <div class="max-w-screen-lg mx-auto flex flex-col md:flex-row justify-center py-6 px-12 md:px-0">

               <div>
                    <h3 class="px-3 mb-2 font-semibold text-base text-slate-500">Bon d'interventions</h3>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Liste des BI</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Par société</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Par site</span></a>
               </div>

               <div class="py-6 md:py-0 md:px-28">
                    <h3 class="px-3 mb-2 font-semibold text-base text-slate-500">BI avec actions</h3>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">BI en cours</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200/50"><span class="text-sm text-gray-500">BI à signer</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200/50"><span class="text-sm text-gray-500">BI à fermer</span></a>
               </div>

               <div>
                    <h3 class="px-3 mb-2 font-semibold text-base text-slate-500">BI terminés</h3>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Par site / société</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200"><span class="text-sm text-gray-500">Par technicien</span></a>
                    <a href="#" class="block px-3 py-1 rounded hover:bg-gray-200/50"><span class="text-sm text-gray-500">BI archivés</span></a>
               </div>

          </div>
     </div>

</header>